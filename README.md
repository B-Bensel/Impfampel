# Impfampel

Das Projekt dient dazu den Personenfluss in einem Impfzentrum besser zu lenken. Dazu wird an einer vorgelagerten Stelle ein Monitor mit einer Übersicht der Belegung der Impfkabinen aufgestellt. Der Monitior kann mit einem Raspberry Pi bespielt werden. Dieser kann zeitgleich den Server bereitstellen. In den Impfkabinen gibt es eine Steuerung auf Basis eines ESP8266 mit zwei Knöpfen. Diese stellen den Status auf frei (grün) bzw. belegt (rot). Eine Status LED ist am Gerät angebracht und zeigt den aktuellen Zustand an. Eine weitere LED kann z.B. vor der Impfkabine angebracht werden.

![Screenshot der Dashboardansicht](https://github.com/B-Bensel/Impfampel/blob/main/Dashboard.png?raw=true)

## Getting started

Vorraussetzungen:

 - Server mit Apache, PHP, Mysql
 - Gerät zur Steuerung z.B. ESP8266
 
1. Ordnerinhalt Server in ein Verzeichnis der Webservers kopieren.
2. Datenbankstruktur anhand der Impfampel.sql Datei erzeugen.
3. Datenbankbenutzer anlegen und im Webserver in der db.php Datei anpassen.
4. ggf. Steuerungsgeräte flashen.

## Steuergerät

Auf Basis von ESP8266. Weiteres folgt.
