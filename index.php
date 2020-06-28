<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    <title>GMG Dev Test</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navigation.css">
    <?php $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<main>
    <div class="text-center col-sm-12 p-0" style="background-image: url('firstimage.png'); background-size: cover; height: 700px">
        <div class="col-sm-3 text-right"><img src="logo.png"></div>
        <nav class="white">
            <a href="#history" class="mr-2"><u>01. HISTORY</u></a>
            <a href="#team"><u>02. TEAM</u></a>
        </nav>
    </div>
    <div class="col-sm-12 ptb-2">
        <div class="col-sm-3 text-right"><img src="secondLogo.png"></div>
        <div class="col-sm-9 text-center">
            <nav>
                <a href="#history"><u>01.HISTORY</u></a>
                <a href="#team"><u>TEAM</u></a>
            </nav>
        </div>
    </div>

    <div id="history" style="background-image: url('secondimage.png'); background-size: cover; height: 700px" class="col-sm-12">

    </div>
    <div id="team" class="col-sm-12 mtb-2"><img src="secondText.png" class="img-responsive"></div>
    <div class="col-sm-12 p-0" style="background: url('backgroundblue.png')">
        <nav class="col-sm-push-2 col-sm-10" style="margin-left: 60px">
            <btn href="#history"><img src="mountain1.png"></btn>
            <a href="">
                MOUNTAIN 2
            </a>
        </nav>
    </div>
    </div>
        <div style="background-image: url('thirdpage.png'); background-size: cover; height: 575px" class="col-sm-12">
        </div>
    <div style="background-image: url('footer.png'); background-repeat: no-repeat; height: 75px" class="col-sm-12">
        </div>

</main>
</body>
</html>
