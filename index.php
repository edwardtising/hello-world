<?php
    $animals = [
    'America' => ['Mammuthus columbi', 'Abydosaurus', 'Coccyzus', 'Neovison vison', 'Burhinidae'],
    'Africa' => ['Acinonyx', 'Vulpes pallida', 'Etmopterus polli', 'Papio', 'Connochaetes taurinus'),
    'Asia' => ['Harpactes erythrocephalus', 'Aplocheilus', 'Bubalus arnee', 'Adasaurus', 'Elephas maximus')
];
    $result = [];
    foreach ($animals as $countinent) {
        $result = array_merge($result, array_filter($countinent, function ($item){ return count(explode(' ', $item)) === 2; }) );
}
    print_r($result);
     ?>
