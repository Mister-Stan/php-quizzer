<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="current">Question 1 of 5</div>
            <p class="question">
                What does PHP stand for?
            </p>
            <form method="post" action="process.php">
                <ul class="choices">
                    <li><input name="choice" type="radio" value="1" />PHP: Hypertext Preprocessor</li>
                    <li><input name="choice" type="radio" value="1" />Private Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Home Page</li>
                    <li><input name="choice" type="radio" value="1" />Personal Hypertext Preprocessor</li>
                </ul>
                <input type="submit" value="Sumbit" />
            </form>
        </div>
    </main>   
    <footer>
        <div class="container">
            Copyright &copy; 2024 PHP Quizzer
        </div> 
</body>
</html>