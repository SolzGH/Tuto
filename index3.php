<!DOCTYPE HTML>
<html>
    <body>
        <form action="">
            <p>Entrer une ip ( ex:185.65.56.149 )</p>
            <p><input type="text" name="ip"></p>
            <p><button type="submit"> Go</button></p>
        </form>
        <div></div>
        <script>
            document.querySelector('form').addEventListener('submit',function(e)
            {
                e.preventDefault();
                const ip = document.querySelector('input').value;
                const access_key = '9993022be24bac56e742302497f5e3b2';
                fetch('http://api.ipapi.com/'+ip+'?access_key='+access_key+'')
                .then(response => response.json())
                .then(function(data){
                    document.querySelector('div').textContent = data['city'];
                    }
                )
            });
        </script>
    </body>
</html>