<?php
// E-Mail-Adresse für Benachrichtigungen
$empfaenger = "deine@email.de";

// Speicherort für Besucheranzahl
$dateipfad = "counter.txt";

// Besucherzahl laden oder initialisieren
if (file_exists($dateipfad)) {
    $anzahl = (int)file_get_contents($dateipfad);
} else {
    $anzahl = 0;
}

// Hochzählen und speichern
$anzahl++;
file_put_contents($dateipfad, $anzahl);

// E-Mail senden
$betreff = "Neuer Besucher auf deiner Website";
$nachricht = "Die Website wurde gerade besucht. Besucher #: " . $anzahl;
$header = "From: server@deinedomain.de";

mail($empfaenger, $betreff, $nachricht, $header);

// Anzeige
echo "<strong>$anzahl</strong>";
?>
