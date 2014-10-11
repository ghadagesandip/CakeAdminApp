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
    echo $this->Html->css(array('bootstrap.min','plugins/dataTables.bootstrap','plugins/metisMenu/metisMenu.min','sb-admin-2','/font-awesome-4.1.0/css/font-awesome.min','style'));
    echo $this->fetch('css');

    ?>
</head>
<body>
<div id="wrapper">
    <?php echo $this->element('nav');?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    <?php echo $this->Session->flash(); ?>
                </h1>

            </div>
        </div>
        <?php echo $this->fetch('content'); ?>
    </div>
</div>
<?php
echo $this->Html->script(array('jquery-1.11.0','bootstrap.min','plugins/metisMenu/metisMenu.min','plugins/dataTables/jquery.dataTables','plugins/dataTables/dataTables.bootstrap','sb-admin-2'));
echo $this->fetch('script');
?>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>
</body>
</html>
