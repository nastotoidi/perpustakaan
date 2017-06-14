						<div class="main-content">
							<div class="main-content-inner">
								<div class="breadcrumbs" id="breadcrumbs">
									<script type="text/javascript">
										try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
									</script>

									<ul class="breadcrumb">
										<li>
											<i class="ace-icon fa fa-home home-icon"></i>
											<a href="#"><?php echo $h2_title; ?></a>
										</li>
										
										
									</ul><!-- /.breadcrumb -->					
								</div>
								<div class="page-content">
									<div class="row">
										<div class="col-xs-12">
											<!-- PAGE CONTENT BEGINS -->
											<div class="widget-box">
														<div class="widget-header widget-header-large">
																	<b>								
																	<?php 
																	if ( ! empty($link))
																		{
																			
																			foreach($link as $links)
																			{
																				echo $links . ' ';
																			}
																		
																		}
																	
																	?>

																	</b>
															

															<div class="widget-toolbar">
																
																<a href="#" data-action="collapse">
																	<i class="ace-icon fa fa-chevron-up"></i>
																</a>

																<a href="#" data-action="close">
																	<i class="ace-icon fa fa-times"></i>
																</a>
															</div>
														</div>

														<div class="widget-body">
															<div class="widget-main">
																<?php											
																	echo ! empty($message) ? '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong>Sorry!</strong>' . $message . '</div>': '';
																	$flashmessage = $this->session->flashdata('message');
																	echo ! empty($flashmessage) ? '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong>Thank You! </strong>' . $flashmessage . '</div>': '';					
																?>
																
																<form class="form-horizontal" action="<?php echo $form_action; ?>" method="post" enctype="multipart/form-data">
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode</label>

																		<div class="col-sm-9">
																			<input class="col-xs-1 disabled" name="id" value="<?php echo set_value('id', isset($default['id']) ? $default['id'] : ''); ?>" type="text" disabled>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kode Buku</label>

																		<div class="col-sm-9">
																			<input name="kd_buku" value="<?php echo set_value('kd_buku', isset($default['kd_buku']) ? $default['kd_buku'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="kode buku" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=8 required>
																			<?php echo form_error('kd_buku', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Judul Buku</label>

																		<div class="col-sm-9">
																			<input name="judul" value="<?php echo set_value('judul', isset($default['judul']) ? $default['judul'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="judul buku" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=30 required>
																			<?php echo form_error('judul', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Pengarang</label>

																		<div class="col-sm-9">
																			<input name="pengarang" value="<?php echo set_value('pengarang', isset($default['pengarang']) ? $default['pengarang'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="nama pengarang" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=30 required>
																			<?php echo form_error('pengarang', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Penerbit</label>

																		<div class="col-sm-9">
																			<input name="penerbit" value="<?php echo set_value('penerbit', isset($default['penerbit']) ? $default['penerbit'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="penerbit" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=30 required>
																			<?php echo form_error('penerbit', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>	
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Tahun Terbit</label>

																		<div class="col-sm-9">
																			<input name="thn_terbit" value="<?php echo set_value('thn_terbit', isset($default['thn_terbit']) ? $default['thn_terbit'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="tahun" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=8 required>
																			<?php echo form_error('thn_terbit', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>	
																	<div class="form-group">
																		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Kota Terbit</label>

																		<div class="col-sm-9">
																			<input name="kota_trb" value="<?php echo set_value('kota_trb', isset($default['kota_trb']) ? $default['kota_trb'] : ''); ?>" type="text" class="col-xs-10 col-sm-5" placeholder="kota di terbitkan" data-bv-trigger="keyup" required data-bv-notempty-message="The first name is required and cannot be empty" maxlength=30 required>
																			<?php echo form_error('kota_trb', '<p class="field_error">', '</p>');?>
																		</div>
																	</div>		
																	
																	<div class="clearfix form-actions">
																		<div class="col-md-offset-4 col-md-8">
																			<input type="submit" id="tbsave" name="tbsave" value="Submit" class=" btn btn-info">						
																			&nbsp; &nbsp; &nbsp;
																			<button class="btn" type="reset">															
																				Reset
																			</button>
																		</div>
																	</div>
																</form>
																
															</div>
															
																
											
												
											
														</div>
													</div>
											
											<!-- PAGE CONTENT ENDS -->
										</div><!-- /.col -->
									</div><!-- /.row -->
								</div><!-- /.page-content -->
							</div>
						</div><!-- /.main-content -->
						

