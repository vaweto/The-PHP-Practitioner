<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        
    </head>
    <body>

        <form method='POST' action='/names'>
            <input type="text" name="name"></input>
            <button type="submit">Submit</button>
        </form>


        <h1>My Tasks</h1>

        <?php foreach ($tasks as $task) : ?>
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