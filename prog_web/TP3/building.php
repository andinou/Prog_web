<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
      <script>
      function chercheBat(){
          let Nombat = getElementById("batiment");
        $.ajax({
            method: "GET",
            url: "getBat.php",
            data: {"Nombat": Nombat}
        }).done(function(e){
            $("#body").CSS("background", "rgb(192,223,239)");
            }).fail(function(e){
                $("#body").CSS("background", "rgb(192,223,0)");
            })
        }
        </script>
     </script>
</head>
<body>
    Entrez le batiment recherché : </br>
    <input type="text" id="batiment">
    <button id="cherche" onclick="chercheBat()">Recherche</button>
</body>
</html>