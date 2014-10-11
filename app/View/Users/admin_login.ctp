<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('User',array('inputDefaults'=>array('class'=>'form-control','label'=>false))); ?>
                    <fieldset>
                        <div class="form-group">
                            <?php  echo $this->Form->input('username',array('placeholder'=>'username')); ?>
                        </div>
                        <div class="form-group">
                            <?php  echo $this->Form->input('password',array('placeholder'=>'username')); ?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-lg btn-success btn-block')); ?>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>