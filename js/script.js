$(document).ready(function () {

    // $('#addHiking').attr({
    //     target: '_blank',
    //     href: 'php/add_hiking.php'
    // });

    $(".submitButton").on("click", function () {

        //Récupérer l'identifiant de la balise <a>
        console.log($(this).attr("id"));

        //Concaténer cet identifiant avec submit pour retrouver l'identifiant du bouton submit
        var submitId = "#submit" + $(this).attr("id") + "";

        // Vérifier que l'identifiant est construit correctement
        console.log(submitId);

        //Envoyer les résultats du formulaire avec la fonction submit
        $(submitId).submit();


    });

    //Closes an alert by removing it from the DOM. If the .fade and .show classes are present on the element, the alert will fade out before it is removed.
    // $(".alert").alert('close')

});