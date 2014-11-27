 <link href="<?= base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
 <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
 <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
 <style type="text/css">
	.timeline-item .date {width: 145px;text-align: center;}
	.inspinia-timeline {font-size: 15px;}
 </style>
 <div class="wrapper wrapper-content">
 	<div class="row animated fadeInRight">
 		<div class="col-lg-3">
 			<div class="widget white-bg p-lg text-center">
                <div class="m-b-md">
                    <i class="fa fa-warning fa-4x"></i>
                    <h1 style="font-size:50px;" class="m-xs">-3</h1>
                    <h3 class="font-bold no-margins">* *</h3>
                </div>
            </div>
 		</div>
 		<div class="col-lg-9">
 			<div class="ibox float-e-margins">
 				<div class="ibox-title">
 					<h5>Historial de Sanciones y Felicitaciones</h5>
 				</div>
 				<div class="ibox-content inspinia-timeline">
 					<div class="timeline-item">
 						<div class="row">
 							<div class="col-sm-3 date">
 								<i>-1</i>
 								24/11/2014
 								<br/>
 								<small class="text-navy">3 días atrás</small>
 							</div>
 							<div class="col-sm-7 content no-top-border">
 								<p class="m-b-xs"><strong>Sanción</strong></p>
 								<p>Por insasistencia a la reunion de socios activos del dia 23/11/2014 se le aplica un punto negativo.</p>
 							</div>
 						</div>
 					</div>
 					<div class="timeline-item">
 						<div class="row">
 							<div class="col-sm-3 date">
 								<i>*</i>
 								15/10/2014
 								<br/>
 								<small class="text-navy">un mes atrás</small>
 							</div>
 							<div class="col-sm-7 content">
 								<p class="m-b-xs"><strong>Felicitación</strong></p>
 								<p>Felicitacion por Buen Desempeño en Subcomisión.</p>
 							</div>
 						</div>
 					</div>
 					<div class="timeline-item">
 						<div class="row">
 							<div class="col-sm-3 date">
 								<i>*</i>
 								21/11/2013
 								<br/>
 								<small class="text-navy">un año atrás</small>
 							</div>
 							<div class="col-sm-7 content">
 								<p class="m-b-xs"><strong>Felicitación</strong></p>
 								<p>Felicitacion por Buen Desempeño en Subcomisión.</p>
 							</div>
 						</div>
 					</div>
 					<div class="timeline-item">
 						<div class="row">
 							<div class="col-sm-3 date">
 								<i>-2</i>
 								29/11/2013
 								<br/>
 								<small class="text-navy">un año atrás</small>
 							</div>
 							<div class="col-sm-7 content">
 								<p class="m-b-xs"><strong>Sanción</strong></p>
 								<p>Se aplican dos puntos negativos por inasistencia al mantenimiento genereal.</p>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
</div>
</div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Peity -->
<script src="<?= base_url(); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= base_url(); ?>assets/js/inspinia.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

<!-- Peity -->
<script src="<?= base_url(); ?>assets/js/demo/peity-demo.js"></script>
<script>
    $(document).ready(function() {
		$("ul > li").removeClass("active");
        $("#navTrib").addClass("active");
    });
</script>