<?php
require_once __DIR__ . '/../classes/Cibo.php';
require_once __DIR__ . '/../classes/Giochi.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Accessori.php';

$categories = [
    'cane' => new Category('cane' , 'prodotti per cani'),
    'gatto' => new Category('gatto' , 'prodotti per gatti'),
    'pesci' => new Category('pesci' , 'prodotti per pesci'),
    'uccelli' => new Category('uccelli' , 'prodotti per uccelli'),

];

$products = [
    new Cibo('Mini Adult', 'Royal Canin', 15.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', true, $categories['cane'], '8000', '1000', 'Pecora' ),

    new Cibo('Holistic Maintenance', 'Almo Nature ', 20.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg', true, $categories['cane'], '18000', '500', 'Tonno e Riso' ),

    new Cibo('Cat Daily', 'Almo Nature ', 3.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', true, $categories['gatto'], '500', '30', 'Pesce' ),

    new Cibo('Mangime per Pesci Guppy in Fiocchi', 'Tetra', 5, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', true, $categories['pesci'], '50', '10', 'pane' ),

    new Accessori('Voliera in Legno', 'wilma','1200','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', false, $categories['uccelli'], 'media','gabbia per uccelli'),

    new Accessori('Cartucce Filtranti per Filtro', 'EasyCrystal','6.99','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', true, $categories['pesci'], 'small','filtri per acquario'),

    new Giochi('kong classic', 'kong', '19.99', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'true', $categories['cane'], 'plastica', 'red'),

    new Giochi('Topini di peluche ','Trixie','5.99','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg','true',$categories['gatto'],'sintetico', 'gray'),
];