<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        
    </head>
    <body>
        <h1>My Tasks</h1>

        <?php foreach ($taks as $task) : ?>
        	<li>
        		<?php if ($task->completed) : ?>
        			<strike><?= $task->description; ?></strike>
    			<?php else : ?>
    				<?= $task->description; ?>	
    			<?php endif; ?> 
        	</li>
        <?php endforeach; ?>
       
    </body>
</html>