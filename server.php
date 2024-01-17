<?php
// Per poter leggere il contenuto di un file usiamo file_get_contents() che ci restituisce il contenuto di quel file sotto forma di stringa.
$stringList = file_get_contents('./json/list.json');
/* 
Per poter far leggere correttamente
i dati a JavaScript, è necessario
specificare che le informazioni
restituite sono di tipo json.

Per fare questo, si usa la funzione
header(), che aggiunge le intestazioni
indicate nella risposta HTTP che avverte il browser che sta ricevendo un Jason.
*/
header('Content-Type: application/json');

echo $stringList;