<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: grid;
            place-items: center;
            background: rebeccapurple;
            height: 100vh;

        }
    </style>
</head>

<body>
    <div>
        <?php

        $books = [
            ['name'=> 'book one','year'=> '2000'],
            ['name'=> 'book two','year'=> '1999'],
            ['name'=> 'book three','year'=> '1970'],
            ['name'=> 'book four','year'=> '2021'],
        ];

        $users = ['mm', 'ss', 'ss', 'asdfa'];
        echo "hello <br>";

        foreach ($users as $user) {
            echo " $user  </br> ";
        }

        $status = false;
        $message = 'false';
        if ($status) {
            $message = 'true';
        }
        ?>

        <h1>
            <?Php echo "$message"; ?>
        </h1>

        <h4> The result name is <?= $message ?> </h4>

        <ul>
            <?php foreach ($users as $user) {
                echo "<li> $user </li>";
            }
            ?>
        </ul>


        <ul>
            <?php foreach ($users as $user) { ?>

                <div class="card">
                    <li> <?= $user ?> </li>
                </div>

                <?php
            } ?>
        </ul>


        <ul>
            <?php foreach ($users as $user): ?>

                <li>User name is <?= $user ?> </li>

            <?php endforeach; ?>
        </ul>


        <div>
            <?php if (true): ?>
                <h4>Hello </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, fuga natus minima ut neque saepe, vero
                    i</p>
            <?php endif; ?>
        </div>

        <div>
            <?php foreach($books as $book) :?>
                <div class="card">
                    <li> <?= $book['name']?> since in <?= $book['year'] ?> year </li>
                </div>
            <?php endforeach ;?>
        </div>
</body>

</html>