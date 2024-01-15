<?php
function laskeTarkistusmerkki($henkilotunnus) {
    // Poista mahdolliset välilyönnit
    $henkilotunnus = str_replace(' ', '', $henkilotunnus);

    // Erottele syntymäaika ja yksilönumero
    $syntymaaika = substr($henkilotunnus, 0, 6);
    $yksilonumero = substr($henkilotunnus, 7, 3);

    // Muodosta yhdeksännumeroinen luku
    $yhdeksanNumeroa = $syntymaaika . $yksilonumero;

    // Laske jakojäännös
    $jakojaannos = $yhdeksanNumeroa % 31;

    // Taulukko tarkistusmerkin määrittämiseksi
    $taulukko = '0123456789ABCDEFGHIJKLMNPQRSTUVWXY';

    // Palauta tarkistusmerkki taulukosta
    return $taulukko[$jakojaannos];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tarkista, että henkilötunnus on annettu
    if (isset($_POST["henkilotunnus"]) && !empty($_POST["henkilotunnus"])) {
        $kayttajanHenkilotunnus = $_POST["henkilotunnus"];

        // Laske tarkistusmerkki annetusta henkilötunnuksesta
        $tarkistusmerkki = substr($kayttajanHenkilotunnus, -1);

        // Laske tarkistusmerkki käyttäjän antamasta henkilötunnuksesta
        $tarkistus = laskeTarkistusmerkki($kayttajanHenkilotunnus);

        // Vertaa laskettua tarkistusmerkkiä käyttäjän antamaan tarkistusmerkkiin
        if ($tarkistus === $tarkistusmerkki) {
                echo '<script>alert("Tarkistusmerkki on oikein.");</script>';
            } else {
                echo '<script>alert("Tarkistusmerkki on virheellinen.");</script>';
            }
        } else {
            echo '<script>alert("Syötä henkilötunnus.");</script>';
        }
        echo '<meta http-equiv="refresh" content="2">';
    }
?>