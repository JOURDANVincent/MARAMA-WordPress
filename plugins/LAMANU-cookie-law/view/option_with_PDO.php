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

            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On essaie de se connecter
            try{
                $conn = new PDO("mysql:host=$servername;dbname=wordpress", $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '<div style="color:green">Connexion BDD OK !! <br></div>';

                // insertion d'une valeur dans une table existante
                $sql = "INSERT INTO lnds_options(option_name, option_value)
                        VALUES('ID_de_suivie', '$track_id')";
                
                $conn->exec($sql);
                echo 'Entrée ajoutée dans la table';
            }
            
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $e){
              echo '<div style="color:red">Erreur : '. $e->getMessage().'</div>';
            }

            // on ferme la connexion (en détruisant l'objet on supprime les infos de connexion)
            echo '<div style="color:white">Fermeture de la connexion..<br></div>';
            $conn = null;
        }
    }

?>

