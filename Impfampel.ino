#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

#define internRed D5
#define internGreen D6
#define internBlue D7

#define externRed D8
#define externGreen D4

#define buttonRed D1
#define buttonGreen D2

const char* ssid = "";
const char* password = "";
const int device = 1;
const char* server = "";

int status = 1;
int changes = 1;
 
void setup () {

  pinMode(internRed, OUTPUT);
  
  pinMode(internGreen, OUTPUT);
  pinMode(internBlue, OUTPUT);

  pinMode(externRed, OUTPUT);
  pinMode(externGreen, OUTPUT);

  pinMode(buttonRed, INPUT);
  pinMode(buttonGreen, INPUT);
  
  Serial.begin(115200);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    digitalWrite(internBlue, HIGH);
    delay(1000);
    digitalWrite(internBlue, LOW);
    delay(1000);
    Serial.println("Connecting..");
  }

  send_changes();
 
}
 
void loop() {
 if (digitalRead(buttonRed) == HIGH) {
  while(digitalRead(buttonRed) == HIGH) {
      delay(100);    
    }
    change_status(1);
 }
 if (digitalRead(buttonGreen) == HIGH) {
  while(digitalRead(buttonGreen) == HIGH) {
      delay(100);    
    }
    change_status(0);
 }
}

void change_status(int current) {
  Serial.println(String(current));
  status = current;
  changes = 1;
  clear_color();
  send_changes();  
}

void clear_color() {
  digitalWrite(internRed, LOW);
  digitalWrite(internGreen, LOW);
  digitalWrite(internBlue, LOW);

  digitalWrite(externRed, LOW);
  digitalWrite(externGreen, LOW);
}

void set_red() {
  digitalWrite(internRed, HIGH);
  digitalWrite(externRed, HIGH);
}

void set_green() {
  digitalWrite(internGreen, HIGH);
  digitalWrite(externGreen, HIGH);
}

void set_blue() {
  digitalWrite(internBlue, HIGH);
}

void send_changes() {
  if (WiFi.status() == WL_CONNECTED) { //Check WiFi connection status

    set_blue();
 
    HTTPClient http;  //Declare an object of class HTTPClient
 
    http.begin("http://" + String(server) + "/device.php?status=" + String(status) + "&device=" + String(device));  //Specify request destination
    int httpCode = http.GET();                                  //Send the request
 
    if (httpCode > 0) { //Check the returning code
 
      String payload = http.getString();   //Get the request response payload
      Serial.println(payload);             //Print the response payload

      delay(500);
      clear_color();
      delay(500);
      if ( payload == "red") {
        set_red();
      } else if(payload == "green") {
        set_green();
      } else {
        set_blue();
      }
      
      changes = 0;
    }
 
    http.end();   //Close connection
  }
}
