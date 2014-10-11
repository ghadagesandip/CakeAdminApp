<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add user
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $this->Form->create('User',array('novalidate','inputDefaults'=>array('class'=>'form-control','div'=>false))); ?>
                        <div class="form-group">
                            <?php echo $this->Form->input('id');?>
                            <?php echo $this->Form->input('username');?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('password',array('value'=>''));?>
                            <p class="help-block">Keep it blank.</p>
                        </div>
                        <div class="form-group">
                            <label for="">Is admin</label>
                            <?php echo $this->Form->input('is_admin',array('label'=>false,'class'=>null));?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('name');?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('email');?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('gender');?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('address');?>
                        </div>

                        <div class="form-group">
                            <?php echo $this->Form->input('mobile_no');?>
                        </div>

                        <div class="form-group">
                            <label for="">Status</label>
                            <?php echo $this->Form->input('status',array('label'=>false,'class'=>null));?>
                        </div>

                        <button type="submit" class="btn btn-success">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                        <?php echo $this->Html->link('Back',array('action'=>'index'),array('class'=>'btn'))?>
                        </form>
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
