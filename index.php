<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header class="bg-primary text-white text-center p-4">
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main class="py-5">
        <div class="container">
        <h2 class="mb-4">Test your PHP Knowledge</h2>
        <p class="lead">This is a multiple choice quiz to test your knowledge of PHP</p>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item"><strong>Number of Questions: </strong>5</li>
            <li class="list-group-item"><strong>Type: </strong>Multiple Choice</li>
            <li class="list-group-item"><strong>Estimated Time: </strong>4 Minutes</li>
        </ul>
        <a href="question.php?n=1" class="btn btn-primary btn-lg">Start Quiz</a>
        </div>
    </main>   
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            Copyright &copy; 2024 PHP Quizzer
        </div> 
    </footer>
</body>
</html>