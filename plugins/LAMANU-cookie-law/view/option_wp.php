<style>

    html, body {
        background-color: #202020 !important;
    }

    .i-lbl {
        color: white;
        font-size: 16px;
        margin-bottom: 20px !important;
    }

    .i-btn {
        height: 40px;
        background-color: black;
        color: white;
        border: 1px solid orange;
        border-radius: 5px;
        padding: 5px 5px 5px 5px !important;
    }

    .i-text {
        height: 40px;
        background-color: #404040 !important;
        color: white !important;
    }
    .i-text::placeholder,
    .i-text {
        color: white;
    }

    form {
        width: 400px;
        margin-top: 50px;
        padding-left: 10px;
    }

</style>

<!-- Formulaire d'enregistrement en base de donnée -->
<form action="" method="POST">
    <label class="i-lbl" for="">ID de suive Google Analytics</label>
    <div>
        <input 
            type="text"
            class="i-text" 
            name="track_id" 
            placeholder="UA-xxxxxxxx-x"
            value=""
            pattern="^UA-[0-9]{4-10}-[0-9]$"
            required
            >
        <input 
            type="submit"
            class="i-btn"
            value="Envoyer"
            >
    </div>
    <div><?= $error['track_id'] ?? '' ?></div>

</form>
<!-- Formulaire d'enregistrement en base de donnée -->


<?php
// ----------------------- Controller d'accès à la base de donnée XAMP en local --------------------------- //


    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // méthode d'envoi POST !!


        if (empty($_POST['track_id'])) { // si le champ est vide

            // affichage de l'erreur sous forme de notif
            add_settings_error('track_id', 'emptyfield', 'Aucun champ renseigné' , 'error');
            settings_errors('track_id');

        } else { // si le chap est rempli

            // Nettoyage du POST
            $track_id = strval(trim(filter_input(INPUT_POST, 'track_id', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)));

            // Contrôle du format
            if(!preg_match("/^UA-[0-9]{8}-[0-9]$/", $track_id)) { // si erreur enregistrement en tableau d'erreur
                
                //$error['track_id'] = 'ID de suivie non valide';
                // affichage de l'erreur sous forme de notif
                add_settings_error('track_id', 'regex error', 'Le format du champ n\'est pas respecté' , 'error');
                settings_errors('track_id');

            } else { /// test de connexion à la base de données

                // controle si la donnée existe ou pas
                if(get_option('ID_de_suivi')){

                    // si existe on met à jour
                    if(update_option('ID_de_suivi', $track_id)) {

                        // affichage de l'erreur sous forme de notif
                        add_settings_error('track_id', 'Update entry BDD', 'Donnée mise à jour en BDD' , 'success');
                        settings_errors('track_id');

                    } else {

                        // affichage de l'erreur sous forme de notif
                        add_settings_error('track_id', 'Duplicate entry BDD', 'La valeur est identique à celle enregistrée' , 'warning');
                        settings_errors('track_id');
                    }

                } else {

                    // si existe on met à jour
                    if(add_option('ID_de_suivi', $track_id)) {

                        // affichage de l'erreur sous forme de notif
                        add_settings_error('track_id', 'Write entry BDD', 'Donnée enregistré en BDD' , 'succes');
                        settings_errors('track_id');

                    } else {

                        // affichage de l'erreur sous forme de notif
                        add_settings_error('track_id', 'Write error BDD', 'Erreur d\'enregistrement' , 'error');
                        settings_errors('track_id');
                    }
                }  
            }
        } 
    } 
?>

