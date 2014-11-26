<link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 red-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> CD </span>
						<h2 class="font-bold">2</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 navy-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Tribunal </span>
						<h2 class="font-bold">1</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 lazur-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Grupo </span>
						<h2 class="font-bold">3</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 yellow-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Subcomisión </span>
						<h2 class="font-bold">0</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-sm-12 animated rubberBand widg">
			<div class="widget style1 blue-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-calendar fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Eventos </span>
						<h2 class="font-bold">9</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 black-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-gavel fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Disciplina </span>
						<h2 class="font-bold">-3</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-6 animated rubberBand widg">
			<div class="widget style1 white-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span> Personal </span>
						<h2 class="font-bold">1</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<script src="assets/js/jquery-2.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/inspinia.js"></script>
<script src="assets/js/plugins/pace/pace.min.js"></script>
<script>
	$('body').ready(function(){
		var t = 1000;
		$(".widg").each(function(){
			var x = $(this);			
			setTimeout(function(){x.show();},t);
			t += 200;			
		});
	});
</script>
</body>
</html>