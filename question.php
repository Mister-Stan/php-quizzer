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
            <!-- Your PHP code for the quiz goes here -->
            <!-- For example: -->
            <h2 class="mb-4">Question 1</h2>
            <p class="lead">What does PHP stand for?</p>
            <form action="process.php" method="post">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-A" value="A">
        <label class="form-check-label" for="question-1-answers-A">
            Personal Home Page
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-B" value="B">
        <label class="form-check-label" for="question-1-answers-B">
            PHP: Hypertext Preprocessor
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-C" value="C">
        <label class="form-check-label" for="question-1-answers-C">
            Private Home Page
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="question-1-answers" id="question-1-answers-D" value="D">
        <label class="form-check-label" for="question-1-answers-D">
            Personal Hypertext Processor
        </label>
    </div>
    <input class="btn btn-primary mt-4" type="submit" value="Submit">
</form>
        </div>
    </main>   
    <footer class="bg-dark text-white text-center p-4">
        <div class="container">
            Copyright &copy; 2024 PHP Quizzer
        </div> 
    </footer>
</body>
</html>