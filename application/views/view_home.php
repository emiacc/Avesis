<link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
<div class="wrapper wrapper-content animated fadeInRight">
	<div id="row1" class="row">
		<div id="logo" class="col-lg-3 col-sm-4">
			<div class="widget p-lg lazur-bg text-center">
				<div class="m-b-md">
					<h2 class="font-bold no-margins">AVEIT</h2>
				</div>
				<img src="<?= base_url(); ?>assets/img/logo.png" class="img-circle m-b-md" alt="profile">  
				<div><span>Asociación Vocacional de Estudiantes e Ingenieros Tecnológicos</span></div>                          
			</div>
		</div>
		<div class="col-lg-6 col-sm-8 no-padding">		
			<div class="col-lg-6 col-sm-6 col-xs-6 animated rubberBand widg">
				<div class="widget style1 yellow-bg">
					<div class="row">
						<div class="col-xs-4">
							<i class="fa fa-envelope-o fa-5x"></i>
						</div>
						<div class="col-xs-8 text-right">
							<span class="tit"> Oficial </span>
							<h2 class="font-bold">2</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-6 animated rubberBand widg">
				<div class="widget style1 navy-bg">
					<div class="row">
						<div class="col-xs-4">
							<i class="fa fa-envelope-o fa-5x"></i>
						</div>
						<div class="col-xs-8 text-right">
							<span class="tit"> Copate </span>
							<h2 class="font-bold">1</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-6 animated rubberBand widg" onclick="window.location='<?= base_url(); ?>tareas'">
				<div class="widget style1 blue-bg">
					<div class="row">
						<div class="col-xs-4">
							<i class="fa fa-check-circle fa-5x"></i>
						</div>
						<div class="col-xs-8 text-right">
							<span class="tit"> Tareas </span>
							<h2 class="font-bold">2</h2>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-lg-6 col-sm-6 col-xs-6 animated rubberBand widg" onclick="window.location='<?= base_url(); ?>tribunal'">
				<div class="widget style1 black-bg">
					<div class="row">
						<div class="col-xs-4">
							<i class="fa fa-gavel fa-5x"></i>
						</div>
						<div class="col-xs-8 text-right">
							<span class="tit"> Disciplina </span>
							<h2 class="font-bold">-3</h2>
						</div>
					</div>
				</div>
			</div>								
		</div>
		<div class="col-lg-3 col-sm-4 col-xs-6 animated bounceInLeft widg">
            <div class="widget lazur-bg p-lg text-center">
                <div class="m-b-md">
                    <i class="fa fa-thumbs-up fa-4x"></i>
                    <h1 class="m-xs">520</h1>
                    <h3 class="font-bold no-margins">Km</h3>
                    <small>Madrid</small>
                </div>
            </div>                   
        </div>
		<div class="col-lg-6 col-sm-4 col-xs-6 animated bounceInLeft widg" onclick="window.location='<?= base_url(); ?>calendar'">
			<div class="widget style1 red-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-calendar fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span class="tit"> Eventos </span>
						<h2 class="font-bold">9</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-sm-4 col-xs-6 animated bounceInLeft widg" onclick="mostrarSocios()">
			<div class="widget style1 yellow-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="fa fa-trophy fa-5x"></i>
					</div>
					<div class="col-xs-8 text-right">
						<span class="tit"> Socios del Mes </span>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="row animated tada" id="sociosDelMes">
		<div class="col-xs-4">
			<div class="ibox-content text-center navy-bg">
				<h2>Yao Ming</h2>
				<div class="m-b-sm">
					<img alt="image" class="img-circle img-socios" src="<?= base_url(); ?>assets/img/soc1.jpg">
				</div>
				<p class="font-bold">G49</p>

				<div class="text-center">
					<a class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i> Like</a>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="ibox-content text-center navy-bg">
				<h2>Jackie Chan</h2>
				<div class="m-b-sm">
					<img alt="image" class="img-circle img-socios" src="<?= base_url(); ?>assets/img/soc3.jpg">
				</div>
				<p class="font-bold">G48</p>

				<div class="text-center">
					<a class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i> Like</a>
				</div>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="ibox-content text-center navy-bg">
				<h2>Brian</h2>
				<div class="m-b-sm">
					<img alt="image" class="img-circle img-socios" src="<?= base_url(); ?>assets/img/soc2.jpg">
				</div>
				<p class="font-bold">G47</p>
				<div class="text-center">
					<a class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i> Like</a>
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
		$("ul > li").removeClass("active");
		$("#navHome").addClass("active");
		
		var t = 1500;
		$(".widg").each(function(){
			var x = $(this);			
			setTimeout(function(){x.show();},t);
			t += 300;			
		});
		//var c = $("#row1").height()-15;
		//$("#logo > div").css("height",c+"px");


	});
	function mostrarSocios(){
		$("#sociosDelMes").toggle();
		mayor = 0;
		$("#sociosDelMes > div > div").each(function(){
			x = $(this).height();
			if(x>mayor)
				mayor = x;
		});
		$("#sociosDelMes > div > div").height(mayor);
				
	}
</script>
</body>
</html>