<html>
<head>
    <title>Alphabet Soup</title>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
</head>
<body>

Testing
<div id='display'></div>

<script>
// $(document).ready(function(){
    (function newLetter(){
        var letter = '';

        var alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']

        var rand = alpha[Math.floor(Math.random() * alpha.length)];

        rand = rand.toUpperCase();

        $('#display').text(rand);

        $(document).keydown(function(e) {
            letter = String.fromCharCode(e.keyCode);
            if(rand === letter){
                $('body').css('background', 'white');
                rand = '';
                letter = '';
                newLetter();
            }
            else
            {
                $('body').css('background', 'red');
            };
        });
    })();
// });
</script>

</body>
</html>
