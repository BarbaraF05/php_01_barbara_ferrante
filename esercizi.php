<?php
/*
//ESERCIZIO N.1 
//1- Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numeri = [1, 2, 3, 4, 5, 6];

// Inizializzo somma e contatore dei numeri pari a 0
$somma = 0; //0-2-0-4-0-6
$contatorePari = 0; //0-1-0-1-0-1

// Itero sull'array e sommo solo i numeri pari
foreach ($numeri as $numero) {
  if ($numero % 2 == 0) {
    $somma += $numero;
    $contatorePari++;
  }
}

// Calcola la media solo se ci sono numeri pari
if ($contatorePari > 0) {
  $media = $somma / $contatorePari;
  echo "La media dei numeri pari è: " . $media;
} else {
  echo "Non ci sono numeri pari nell'array.";
}


ES. N.2- Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o
“Buongiorno Nome Cognome” a seconda del genere
ES. $users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];


$users = [  
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Giovanni', 'surname' => 'Rossi', 'gender' => 'M'],
    ['name' => 'Elisa', 'surname' => 'Marini', 'gender' => 'F'],
];

    foreach ($users as $user) {
        //echo "$user";
        //var_dump($user);
        if ($user['gender'] == 'NB'){
            echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
        } elseif ($user['gender'] == 'M'){
            echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
        } elseif ($user['gender'] == 'F') {
            echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
        };
   

    }


3- Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “BUON” al posto del numero; se multiplo di 5 stampare “GIORNISSIMO”;
se multiplo di 3 e 5 contemporaneamente deve stampare “BUONGIORNISSIMO".

for ($i = 1; $i <= 100; $i++) { //imposto un ciclo for col contatore $i = 1; la condizione di uscita dal ciclo è che $i sia inferiore o uguale a 100;
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "BUONGIORNISSIMO" . "\n";
    } elseif ($i % 3 == 0) {
        echo "BUON" . "\n";
    } elseif ($i % 5 == 0) {
        echo "GIORNISSIMO" . "\n";
    } else {
        echo $i."\n";
    }
};

*/



?>