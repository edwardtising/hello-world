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

$result2 = implode(', ', $result);
echo '<pre>';
print_r($result2);

$keywords = preg_split("/[\s,]+/", $result2);
echo '<pre>';
print_r($keywords);


$keywords2 = implode(', ', $keywords);
echo '<pre>';
print_r($keywords2);


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



?>
