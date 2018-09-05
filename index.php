<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo de WOD</title>
</head>
<body>

    <h2>Ejemplo de carga de WOD</h2>
    <button onclick="obtieneWOD()">Carga WOD</button>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>    
    

        function obtieneWOD()
        {   
            const url = "http://wod-gen.com/generate"

            $.ajax({
                url: url,
                type: 'POST',
                crossDomain: true,
                data: { tag: '20 Min. AMRAP', 
                exerciseDropdown: 'Box Jumps' },
                success: function(data) {
                    $.post('createfile.php', { valor : data}, function(info) {
                        console.log(info)
                    })
                }
            })
            
            /*
            $.post("http://wod-gen.com/generate" ,
            { 
                crossDomain: true,
                tag: '20 Min. AMRAP', 
                exerciseDropdown: 'Box Jumps'
                } , 
                function(data)
                { 
                   
                    $.post('createfile.php', { valor : data}, function(info) {
                        console.log(info)
                    })
                })*/
        }

    
    </script>
    
</body>
</html>