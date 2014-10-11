
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Users <?php echo $this->Html->link('Add New',array('action'=>'admin_add'),array('class'=>'btn btn-primary')); ?>

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($users as $user){?>
                            <tr class="odd gradeX">
                                <td><?php echo $user['User']['username']?></td>
                                <td><?php echo $user['User']['name']?></td>
                                <td><?php echo $user['User']['email']?></td>
                                <td><?php echo $user['User']['gender']?></td>
                                <td><?php echo $user['User']['status']?></td>
                                <td>
                                    <?php echo $this->Html->link('View',array('action'=>'view',$user['User']['id']),array('class'=>'btn btn-info'))?>
                                    <?php echo $this->Html->link('Edit',array('action'=>'edit',$user['User']['id']),array('class'=>'btn btn-warning'))?>
                                    <?php echo $this->Form->postLink(
                                        'Delete',
                                        array('action' => 'delete', $user['User']['id']),
                                        array('confirm' => 'Are you sure?','class'=>'btn btn-danger')
                                    );?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

