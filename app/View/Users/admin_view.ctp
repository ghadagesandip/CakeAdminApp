<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                View user details <?php echo $this->Html->link('Back',array('action'=>'index'),array('class'=>'btn btn-default'))?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <dl class="dl-horizontal">
                           <dt>Id</dt>
                           <dd><?php echo $user['User']['id']?></dd>

                            <dt>Username</dt>
                            <dd><?php echo $user['User']['username']?></dd>

                            <dt>Name</dt>
                            <dd><?php echo $user['User']['name']?></dd>

                            <dt>Email</dt>
                            <dd><?php echo $user['User']['email']?></dd>

                            <dt>Gender</dt>
                            <dd><?php echo $user['User']['gender']?></dd>

                            <dt>address</dt>
                            <dd><?php echo $user['User']['address']?></dd>

                            <dt>Mobile no</dt>
                            <dd><?php echo $user['User']['mobile_no']?></dd>

                            <dt>Status</dt>
                            <dd><?php echo $user['User']['status']?></dd>

                        </dl>

                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
