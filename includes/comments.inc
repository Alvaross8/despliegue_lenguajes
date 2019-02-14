<?php
    require_once("classes/comment.php");
    require_once("classes/connect.php");
    require_once("classes/controller.php");
    $controller = new Controller();
    if(isset($_POST["addComment"])){
        $result = $controller->addComment($_POST["author"], $_POST["comment"], $location);
    }
    $comments = $controller->getComments($location);
?>
<?php 
foreach($comments as $c){
    ?>
    <div class="card" style="border: 1px solid #ddd; border-radius: 3px; padding: 10px; margin: 10px 0;">
      <div class="card-body">
        <h5 class="card-title"><?=$c->getAuthor()?></h5>
        <p class="card-text"><?=$c->getComment()?></p>
      </div>
    </div>
    <?php
}
if(isset($result) && $result){
    ?>
    <div class="alert alert-success" role="alert">
      Comentario registrado con exito!
    </div>
    <?php
}elseif(isset($result) && !$result){
    ?>
    <div class="alert alert-danger" role="alert">
      Error al registrar el comentario;
    </div>
    <?php
}
?>
 <form action="<?=basename($location)?>" method="POST" style="margin-bottom: 10px;">
  <input type="hidden" name="addComment" value=" ">
  <div class="form-group">
    <label for="author">Autor</label>
    <input type="text" class="form-control" id="author" placeholder="Nombre" name="author" required>
    <small class="form-text text-muted">Se mostrará el nombre en público.</small>
  </div>
  <div class="form-group">
    <label for="comment">Comentario</label>
    <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="terms" required>
    <label class="form-check-label" for="terms">Acepto los términos y condiciones.</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

