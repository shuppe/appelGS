<!DOCTYPE html>
<html>

<head>
    <title>Appel GS</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
    html,
    body {
        height: 100%;
    }
    
    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }
    
    .contenu {
        text-align: center;
        vertical-align: middle;
        display: block;
        width: 90%;
        margin-left: 20px;
        margin-top: 20px;
    }
    
    .formulaire {
        text-align: center;
        vertical-align: text-bottom;
        display: table;
        width: 100%;
        margin-top: 20px;
        border-width: 1px;
        border-color: black;
        border-style: solid;
        padding: 0px 0px;
    }
    
    .titre-question,
    .reponse {
        height: 30px;
        vertical-align: middle;
        border-width: 0px;
        border-color: black;
        border-style: solid;
        padding: 0px 3px;
    }
    
    input {
        border-width: 0px;
        width: 100%;
        height: 90%;
    }
    
    .title {
        font-size: 96px;
    }
    
    .ligne-section {
        display: table-row;
        background-color: grey;
        color: white;
        width: 100%;
        border-width: 1px;
        border-color: black;
        border-style: solid;
    }
    
    .ligne-question {
        width:100%;
        display: table-row;
    }
    
    .titre-question {
        background: lightgrey;
    }
    
    .bloc-question {
        display: table-cell;
        border-width: 0px;
        border-color: black;
        border-style: solid;
        padding: 0px 0px;
    }
    
    .bouton {
        width: 75px;
        margin: 10px;
    }
    </style>
</head>

<body>
    <form method="post" action="">
        <div class="contenu">
            <div class="formulaire">
                <div class="ligne-section">information sur le contact</div>
            </div>
            <div class="formulaire" style="margin-top:0px;">
                <div class="ligne-question">
                    <div class="bloc-question">
                        <div class="titre-question">No. Appel</div>
                        <div class="reponse">
                            <input class="numero" type="number" readonly="1" name="appel_no" value="1234">
                        </div>
                    </div>
                    <div class="bloc-question">
                        <div class="titre-question">Date</div>
                        <div class="reponse">
                            <input class="date" type="date" name="appel_date" placeholder="aaaa-mm-jj">
                        </div>
                    </div>
                    <div class="bloc-question">
                        <div class="titre-question">Nom de la bénévole</div>
                        <div class="reponse">
                            <input type="text" name="appel_benevol">
                        </div>
                    </div>
                    <div class="bloc-question">
                        <div class="titre-question">Nom de la personne</div>
                        <div class="reponse">
                            <input type="text" name="appel_contact">
                        </div>
                    </div>
                </div>
            </div>
                <div class="ligne-question">
                    <div class="bloc-question">
                        <div class="titre-question">No. Appel</div>
                        <div class="reponse">
                            <input class="numero" type="number" readonly="1" name="appel_no" value="1234">
                        </div>
                    </div>
                    <div class="bloc-question">
                        <div class="titre-question">No. Appel</div>
                        <div class="reponse">
                            <input class="numero" type="number" readonly="1" name="appel_no" value="1234">
                        </div>
                    </div>
                </div>
            <div class="formulaire">
                <div class="ligne-section">Caracéristiques</div>
            </div>
            <div class="formulaire">
                <div class="ligne-section">Services offerts</div>
            </div>
            <input class="bouton" type="submit" name="termine" value="Terminé">
        </div>
    </form>
</body>

</html>
