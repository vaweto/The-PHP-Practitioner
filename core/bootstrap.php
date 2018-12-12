<?php

App::bind('config', $config = require 'config.php' );

$config = App::get('config');



App::bind('database', new QueryBuilder(
	Connection::make($config['database'])
));