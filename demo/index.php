<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
<?php
$books = [
    [
        'name'        => 'Do Androids Dream of Electric Sheep',
        'author'      => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name'        => 'The Langoliers',
        'author'      => 'Stephen King',
        'releaseYear' => 1990,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name'        => 'Hail Mary',
        'author'      => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com',
    ],
    [
        'name'        => 'The Martian',
        'author'      => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com',
    ]
];

$filteredBooks = array_filter($books, function ($book) {
   return $book['author'] === 'Andy Weir';
});
?>

<h1>Recommended books</h1>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>