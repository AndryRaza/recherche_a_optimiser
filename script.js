$(document).ready(function () {
    prout(0);   //fonction pour envoyer la valeur de l'input, on l'appelle au début pour afficher tous les résultats possibles
    $("#search").keyup(function () {    //quand l'utilisateur commence à taper dans le champ
        txt = $("#search").val();   //on récupère ce qu'il écrit
        prout(txt); //on appelle la fonction prout

    });
    function prout(val){    //on envoie par $_POST la valeur tapé et tout se passe dans le fichier read.php
        $.post("read.php", { suggest: val }, function (result) {
            $("#afficher").html(result);    //On écrit le résultat après traitement dans le fichier read.php dans la div afficher
        });
    }
});
