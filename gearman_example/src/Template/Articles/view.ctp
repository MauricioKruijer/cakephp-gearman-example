<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<?php echo $this->Html->image('/upload/avatar/' . $article->filename); ?>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
