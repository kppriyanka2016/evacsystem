<?php echo $this->element('sidemenus\admin_navbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<head>
<?= $this->Html->css('view.css') ?>
</head>
<body>
<div class="container marginbot-50 home-section color-dark">
    
    <div class="container">
        <div class="users view large-9 medium-8 columns content">
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">  <h4 >Admin Profile</h4></div>
            <div class="panel-body">
              <div class="box box-info">
                <div class="box-body">
                  <div class="col-sm-6">
                    <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                        <input id="profile-image-upload" class="hidden" type="file">
                        <div style="color:#999;" >click on image to change profile picture</div>
                          <!--Upload Image Js And Css-->
                        
                      <!-- /input-group -->
                    </div>
                    <div class="clearfix"></div>
                    <hr style="margin:2px 0 5px 0;">
                    <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 "><?= h($user->email) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >Password:</div><div class="col-sm-7"><?= h($user->password) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7"><?= h($user->phone) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >Id:</div><div class="col-sm-7"><?= $this->Number->format($user->id) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >Created:</div><div class="col-sm-7"><?= h($user->created) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >Modified:</div><div class="col-sm-7"><?= h($user->modified) ?></div>
                    <div class="clearfix"></div>
                    <div class="bot-border"></div>
                    <div class="col-sm-5 col-xs-6 tital " >User type:</div><div class="col-sm-7"><?= h($user->Type) ?></div>
                  <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div> 
            </div>
          </div>  
          <script>
                    $(function() {
          $('#profile-image1').on('click', function() {
              $('#profile-image-upload').click();
                });
              });       
          </script> 
        </div>
    </div> 
    </div>
</div>
</body>
