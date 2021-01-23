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

    <div>
        <input 
            type="text"
            class="i-text" 
            name="track_id" 
            placeholder="ID de suivie"
            value=""
            pattern="^UA-[0-9]{8}-[0-9]$"
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


    if ($_SERVER['REQUEST_METHOD'] == 'POST'  && !empty($_POST['track_id'])) {

        $track_id = strval(trim(filter_input(INPUT_POST, 'track_id', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)));

        if(!preg_match("/^UA-[0-9]{8}-[0-9]$/", $track_id)) {
            $error['track_id'] = 'ID de suivie non valide';

        } else { /// test de connexion à la base de données

            if($wpdb->insert(
                $wpdb->prefix.'options',
                array(
                    'option_name' => 'ID_de_suivi',
                    'option_value' => $track_id,
                ),
                array(
                    '%s',
                    '%s',
                )
            )) {
                echo 'enregistrement réussi !!!';
            } else {
                echo 'enregistrement echoué !!!';
            }
        }
        
        
    }

?>

