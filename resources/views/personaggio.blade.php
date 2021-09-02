<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tac">
        <div class="core">
            <h1> Io sono {{$name}} </h1>
            <img src="{{$srcLogo}}" />
            <h3><a href="\">HOME</a> </h3>
        </div>
    </div>
</body>
</html>

<!-- Styles -->
<style>
            img {
            
                height: 200px;
                width : auto;
            }

            .tac {
                text-align: center;
            }
