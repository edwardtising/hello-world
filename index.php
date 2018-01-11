<?php

$animals = [
    'America' => ['Mammuthus columbi', 'Abydosaurus', 'Coccyzus', 'Neovison vison', 'Burhinidae'],
    'Africa' => ['Acinonyx', 'Vulpes pallida', 'Etmopterus polli', 'Papio', 'Connochaetes taurinus'],
    'Asia' => ['Harpactes erythrocephalus', 'Aplocheilus', 'Bubalus arnee', 'Adasaurus', 'Elephas maximus']
];
echo '<pre>';
print_r($animals);

$result = [];
    foreach ($animals as $countinent) {
        $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}
echo '<pre>';
print_r($result);

//$result2 = array_chunk($result, 2);
//echo '<pre>';
//print_r($result2);

$result2 = implode(', ', $result);
echo '<pre>';
print_r($result2);

$keywords = preg_split("/[\s,]+/", $result2);
echo '<pre>';
print_r($keywords);


$keywords2 = implode(', ', $keywords);
echo '<pre>';
print_r($keywords2);

//$string = ['Mammuthus', 'columbi', 'Neovison', 'vison', 'Vulpes', 'pallida', 'Etmopterus', 'polli', 'Connochaetes', 'taurinus', 'Harpactes', 'erythrocephalus', 'Bubalus', //'arnee', 'Elephas', maximus];
//$result3 = str_replace()

/*$result3 = str_replace(['columbi', 'vison', 'pallida', 'polli'], ['taurinus'. 'erythrocephalus', 'arnee', 'maximus'], $keywords2);
echo '<pre>';
print_r($result3);*/


$result3 = array_chunk($keywords, 2);
echo '<pre>';
print_r($result3);

$first_names = array_column($result3, 0);
print_r($first_names);

$second_names = array_column($result3, 1);
print_r($second_names);

asort($second_names);
foreach ($second_names as $key => $val) {
    echo "$key = $val\n";
}
print_r(array_values($second_names));

$result4 = array_merge_recursive($first_names, $second_names);
print_r($result4);

//$result4 = array_replace();
//echo '<pre>';
//print_r($result4);

//asort($result3);
//foreach ($result3 as $key => $val) {
    //echo "$key = $val\n";
//}


/*shuffle($result3);
foreach ($result3 as $result4) {
    echo '<pre>';
    print_r($result4);
}*/

//$newkeywords = array_slice($keywords. 2);
//echo '<pre>';
//print_r($newkeywords);

//$result3 = array_replace('columbi', 'vison', 'pallida', 'polli', 'taurinus', 'erythrocephalus', arnee', 'maximus',);
//echo '<pre>';
//print_r($result3);*/

?>
