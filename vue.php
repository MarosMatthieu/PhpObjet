<html>
    <head>
        <title>Les news</title>
    </head>

    <body>
        <h1>Les news</h1>
        <div id="news">
            <?php              
                //Affichage sujet / Date 
                //foreach ($ONews as $new):
                    echo "<h1>".$ONews->getTitre()." postee le ".$ONews->getDate()."</h1>";
                    echo "<p>". $ONews->getTexte_nouvelle()."</p>";
                //endforeach ;

                //Affichage du Nb de commentaire relatif a la nouvelle
                echo "<h3>".$nbre_comment." commentaires relatifs a cette nouvelle</h3>";


           
                //affichage NOM / DATE / COMMENTAIRE --- Recuperation dans un TABLEAU de commentaire
                foreach ($comments as $OCommentaire):
                    echo "<h3>".$OCommentaire['auteur']." a ecrit le ".$OCommentaire['date']."</h3>";
                    echo "<p>".$OCommentaire['texte']."</p>";
                endforeach ;

            ?>
        
        <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>" name="ajoutcomment">
            <input type="hidden" name="news_id" value="<?php echo $news_id?>">
            <input type="text" name="auteur" value="Votre nom"><br />
            <textarea name="texte" rows="5" cols="10">Saisissez votre commentaire</textarea><br />
            <input type="submit" name="submit" value="Envoyer">
        </form>
    </div>
    </body>
</html>