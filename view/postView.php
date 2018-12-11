<?php $title = 'Episode'; ?>


<?php ob_start(); ?>

<div class='row back '>
    <div class="col-xs-12 box">

        <div class="row">
            <div class="col-xs-12">
                <a href="index.php">Retour aux épisodes</a>
            </div>
            
        </div>

        <br/>
        <div class="row box">
            <div class="col-lg-12">
                <div class="chapter">
                <h3>

                    <?= nl2br(htmlspecialchars($post->title())) ?>
                </h3>



                <div class="allbackground">

                    <?= nl2br(htmlspecialchars($post->content())) ?><br/>
                    <?php if (!isset($comments)){ ?>
                    <a href="index.php?action=displayComments&amp;id=<?= $post->id() ?>" class="pull-right" id="comment-link">Commentaires</a><br/>
                    <?php
    }
                    ?>
                        <?php if (isset($_SESSION['pseudo'])) // Si il exite un cookie
    { 
    // On affiche les liens
                    ?>
                    

                            <a href="index.php?action=modifyPost&amp;id=<?= $post->id() ?>"><span class="glyphicon glyphicon-edit"></span>Modifier</a>
                            <a href="index.php?action=deletePost&amp;id=<?= $post->id() ?>"><span class="glyphicon glyphicon-trash"></span>Supprimer</a>
  <?php                          
} ?>
                </div>
                    <br/>
                    <div class="row box">
            <div class="col-xs-12">
              <?php 
                include ('commentView.php');
              ?>
            </div>
            </div>
                 

            </div>



        
            
            <div  class="col-xs-12 col-sm-12  col-md-6 col-md-6 col-md-offset-3 formbox text-center">
                <h2>Ajouter un commentaire</h2>
                <form action="index.php?action=addComment&amp;id=<?= $post->id() ?>" method="post">



                    <label for="author">Pseudo:</label><br />
                    <input type="text" id="author" name="author" /><br/>


                    <label for="comment">Commentaire:</label><br />
                    <textarea id="comment" name="comment" ></textarea><br/>

                    <button class="btn btn-primary" type="submit">Ajouter <span class="glyphicon glyphicon-comment" ></span></button>
                </form>
            </div>
        </div>
            

        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>
