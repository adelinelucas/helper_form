<?php 
    include_once('./helper_form.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Helper form</title>
</head>
<body>
    <main class="container mt-4">
        <h1 class="text-warning fw-bolder fs-1 m-auto mb-4">Création d'un helper form</h1>
        <h2 class="text-light bg-dark fs-4 px-2">Context:</h2>
        <p>Un service interne à l'entreprise générait des landing pages pour l'inscription de prospect, le designer/intégrateur de ce service ne devait pas intervenir sur les fichiers PHP ou Javascript. La génération du formulaire était réalisée via une fonction php, cependant en raison des champs spécifiques voulus pour différentes campagnes marketing, la fonction s'était vue dupliquée en 4 exemplaires avec dans chaque exemplaire de 8 paramètres pour afficher des champs différents en fonction des campagnes. expl de la fonction et des paramtères : <span class="text-light bg-dark px-2 py-1">form_newTemplateUpdate('', 'Je prends rendez-vous', '', 'cp', '', '', 'client',TRUE );</span></p>
        <p>Le helper avait pour but de remplacer cette fonction pour gagner en visibilité et donne également plus d'autonomie au service en lui permettant de créer simplement des formulaires personnalisés sans intervenir coté back.</p>
        <p>C'est le dernier projet que j'ai pu mener avant mon alternance.</p>

        <section class="section__formulaire border border-5 border-warning rounded p-4 mb-5">
            <h3 class="form-title fw-bolder"><strong>Formulaire de contact</strong></h3>
                <?php //form_newTemplateUpdate('', 'Je prends rendez-vous', '', 'cp', '', '', 'client',TRUE ); ?>
                <?php
                $myForm = new CreateForm() ; 
                    $myForm->openForm()
                        ->input("text", "nom_prenom",["placeholder"=> "Prénom et Nom du client", "minlength"=>"2", "maxlength"=>"100", "class"=>"input", "required"=>"true", "autocomplete"=>"on"])
                        ->input("text", "code_postal",["placeholder"=> "Code postal du client", "maxlength"=>"5", "class"=>"input", "required"=>"true", "autocomplete"=>"on"])
                        ->input("tel", "telephone", ["placeholder"=> "Numéro de mobile du client", "maxlength"=>"10", "class"=>"input", "required"=>"true", "autocomplete"=>"on"])
                        ->input("mail", "email",["placeholder"=>"Votre email*"])
                        ->input("text", "numero_client", ["placeholder"=> "Numéro client", "maxlength"=>"9", "class"=>"input", "required"=>"true"])
                        ->input("text", "adresse", ["placeholder"=> "Votre adresse", "minlength"=> "2", "maxlength"=>"150", "class"=>"input", "required"=>"true", "autocomplete"=>"on"])
                        ->input("text","ville",["placeholder"=> "Votre ville", "maxlength"=>"150", "class"=>"input", "required"=>"true", "autocomplete"=>"on"])
                        ->select("horaires", ["class"=>"form-select"],["0"=> "- Votre plage de rappel -", "09h00-10h00"=>"09h00 - 10h00", "10h00-11h00"=>"10h00 - 11h00", "11h00-12h00"=>"11h00 - 12h00", "12h00-13h00"=>"12h00 - 13h00","13h00-14h00"=>"13h00 - 14h00", "14h00-15h00"=>"14h00 - 15h00", "15h00-16h00"=>"15h00 - 16h00", "16h00-17h00"=>"16h00 - 17h00","17h00-18h00"=>"17h00 - 18h00","18h00-19h00" =>"18h00 - 19h00"])
                        ->checkbox("contratX", "Etes-vous titulaire d'un contrat Enseigne X", null)
                        ->addHTMLcontent("<div class='p-3 mb-2 bg-warning text-white'>Possibilité d'ajouter du contenu HTML au form pour augmenter la personnalisation</div>")
                        ->submit('Je prends rendez-vous', ["class" =>"submit"])
                        ->closeForm();
                            // */
                ?>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>