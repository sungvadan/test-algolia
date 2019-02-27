<?php
require __DIR__.'../vendor/autoload.php';

$client = \Algolia\AlgoliaSearch\SearchClient::create(
    '8A4S6PIKSM',
    '807f9ce23ace2cc3094e24b33a792d7d'
);

$index = $client->initIndex('my_algolia_contact');
$batch = json_decode(file_get_contents('https://raw.githubusercontent.com/algolia/doc-onboarding/master/datasets/ecommerce.json'),true);
$index->saveObjects($batch, ['autoGenerateObjectIDIfNotExist' => true]);



