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
    ['name' => 'book one', 'year' => '2000'],
    ['name' => 'book two', 'year' => '1999'],
    ['name' => 'book three', 'year' => '1970'],
    ['name' => 'book four', 'year' => '2021'],
];

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

</body>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>