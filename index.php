<html>
<head>
    <title>Multiple Numbers</title>
</head>
<body style="justify-content: center"> <br><br>
    
    
    <div id="form" style="border: 1px solid blue; width: 60%; text-align: center"><br>
        <form id="formulario" action="calculation.php" method="post">
        <input type="number" placeholder="Start Number" name="start" id="start" required autofocus>
        <input type="number" placeholder="End Number" name="end" id="end" required>
            <br><br>
            <input type="submit" id="btnEnviar" name="btnEnviar" value="Process">
        </form>
    </div>
    
    
    <hr>
    <p class="respuesta">

    </p>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <script src="send.js"></script>
</body>
</html>

