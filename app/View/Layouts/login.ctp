<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>

        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css(array('bootstrap.min','plugins/metisMenu/metisMenu.min','sb-admin-2','/font-awesome-4.1.0/css/font-awesome.min'));
    echo $this->fetch('css');

    ?>
</head>
<body>
<div class="container">

    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->fetch('content'); ?>

</div>
<?php

echo $this->Html->script(array('jquery-1.11.0','bootstrap.min','plugins/metisMenu/metisMenu.min','sb-admin-2'));
echo $this->fetch('script');


?>
</body>
</html>
