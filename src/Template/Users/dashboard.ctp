<html >
	<head>
  		<meta charset="UTF-8">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  		<?= $this->Html->css('font-awesome.min.css') ?>
  		<?= $this->Html->css('sidenavstyle.css') ?>
	</head>

<body>
  <div id="responsive-admin-menu">
	<div id="responsive-menu">
		<div class="menuicon">≡</div>
	</div>
	
	<div class="site-logo">
	                <?php echo $this->html->image('logo.jpg', array('alt'=>'','width'=>'200px'));?>
	              </div>

	<!--Menu-->
	<div id="menu">
			<br/>
			<br/>
			<?= $this->Html->link(__('Profile'), ['controller'=>'users', 'action' => 'dashboard'], array('class'=>'icon-dashboard')); ?>
			<?= $this->Html->link(__('List Users'), ['controller'=>'users', 'action' => 'index'], array('class'=>'icon-dashboard')); ?>
			<a href="" title="Services" class="submenu" name="media-sub"><i class="icon-eye-open"></i><span>  
			Services</span></a>
			<!-- Media Sub Menu -->
				<div id="media-sub" style="display: none;">
					<?= $this->Html->link(__('Emergency Checklist'), ['action' => 'checklist'], array('class'=>'icon-dashboard')); ?>
					<a href="" title="Safe Route"><i class="icon-film"></i><span>  
					Safe Route</span></a>
					<a href="" title="Safe Storage"><i class="icon-picture"></i><span>  
					Safe Storage</span></a>
				</div>
			<!-- Media Sub Menu -->
			<?= $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout'], array('class'=>'icon-dashboard')); ?>
	</div>
	<!--Menu-->


</div>

<div id="content-wrapper">

	
<h3>Dashboard</h3>
	<button class="btn-btn-danger"><?php echo $this->html->link('Reset Password',['controller'=>'users','action'=>'password']);?> </button>


</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>