<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
      function chercheBat(){
          var nombat = document.getElementById("batiment").value;
        $.ajax({
            method: "GET",
            url: "getBat.php",
            data: {"nombat": nombat}
        }).done(function(e){
            $("#body").css("background", "green");
            $("#table").empty().append(e);
            console.log("ça marche");
            }).fail(function(e){
                $("#body").css("background", "red");
                console.log("ca marche pas");
            })
        }
        </script>
     
</head>
<body>
    <title> TP3 </title>
    <h1>Entrez le batiment recherché : </h1></br>
    <input type="text" id="batiment">
    <button id="cherche" onclick='chercheBat()'>Recherche</button>
    <table id="table"></table>
</body>
</html>