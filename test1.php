<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            /* padding: 0;
            margin: 0;
            box-sizing: border-box;
            background: gray
            display: grid;
            place-items: center;
            height: 100vh; */
        }
    </style>
</head>

<!-- php -->
<?php
$users = ['mgmg', 'aung', 'susu'];

$books = [
    ['name' => 'book one', 'year' => '2000', 'author' => 'john'],
    ['name' => 'book two', 'year' => '1999', 'author' => 'doe'],
    ['name' => 'book three', 'year' => '1970', 'author' => 'boo'],
    ['name' => 'book four', 'year' => '2021', 'author' => 'foo'],
];

function flterByAuthor(array $books): array
{
    $authors = array_map(function ($book) {
        return $book['author'];
    }, $books);
    return $authors;
}

$authors = flterByAuthor($books);  //as like computed

function filterByYear(array $books, string $year = 'null'): array
{
    $booksByYear = [];
    foreach ($books as $book) {
        $booksByYear[] = $book['year'];
    }
    return $booksByYear;
}


function userName(array $params): string
{
    return $params[0];
}

// general filter
$filter = function (array $items, $key, $value): mixed {
    $filterItems = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            return $filterItems = $item;
        }
    }
    return $filterItems;
};

$years = $filter($books, "year", '2000');
$writers = $filter($books, "author", 'foo');

// general map
$map = function ($array, $key, $value = null) {
    $mapArray = array_map(function ($i) use ($key, $value) {
        if ($value) {
            return $i[$key] == $value;
        } else {
            return $i[$key];
        }
    }, $array);
    return $mapArray;
};

$myAuthorName = $map($books, "author");
$myByAuthorName = $map($books, "author", 'doe'); //return true and false

var_dump($myAuthorName);
var_dump($myByAuthorName);


// props with fun 
$filterbyfn = function ($array, $fn) {
    $items = [];
    foreach ($array as $value) {
        if ($fn($value)) {
            $items[] = $value;
        }
    }
    return $items;
};
$fiterFn = $filterbyfn($books, function ($book) {
    return $book['year'] == '2000';
});
var_dump($fiterFn);

// build in filter
$buildInFilter = array_filter($books, function ($book) {
    return $book['author'] == 'foo';
});
print_r($buildInFilter);



class Test
{
    private $name;

    private $allUsers = [];

    public $users = ['mgmg', 'aung', 'susu'];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function callName()
    {
        return $this->name;
    }

    static function test()
    {
        return 'This is test class';
    }

    public function all(): array
    {
        foreach ($this->users as $user) {
            $this->allUsers[] = strtoupper($user);
        }
        return $this->allUsers;
    }


}

$test_one = new Test('aung aung');

?>


<body class="">

    <div class="container-fluid bg-white p-4">
        <div class="row">
            <?php foreach ($users as $user): ?>
                <div class="col-4 g-5">
                    <div class="card pt-2 px-2 text-center">
                        <?php if ($user === 'mgmg'): ?>
                            <h3 class="bg-danger"> <?= strtoupper($user) ?> </h3>
                        <?php else: ?>
                            <h3 class="bg-primary"> <?= strtoupper($user) ?> </h3>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?= userName($users) ?>
    <?= $test_one->callName() ?>
    <?= $test_one::test() ?>
    <?= $test_one->all()[1] ?>

    <hr>
    <h3>Function</h3>
    <div class="row mt-4">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group p-1">
                        <?php foreach (filterByYear($books) as $year): ?>
                            <li class="p-2 list-group-item"> <?= $year ?> </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="row mx-5 my-2">
        <div class="col-3">
            <div class="card p-2">
                <ul class="list-group">
                    <?php foreach ($authors as $author): ?>
                        <li class="list-group-item"> <?= $author ?> </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="card p-2">
                <ul class="list-group">
                    <?php foreach ($years as $year): ?>
                        <li class="list-group-item"> <?= $year ?> </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="col-3">
            <div class="card p-2">
                <ul class="list-group">
                    <?php foreach ($writers as $writer): ?>
                        <li class="list-group-item"> <?= $writer ?> </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <hr>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<script>

    let hit = function () {
        console.log('hit');
    };
    hit();




</script>

</html>