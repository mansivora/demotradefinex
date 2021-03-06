<div class="col-md-12">
	<ul class="breadcrumb bc-3">
		<li>
			<a href="<?php echo base_url() ?>dashboard"><i class="fa fa-home"></i> Home</a>
		</li>
		<li>
			Industries
		</li>
		<?php if($breadcumb <> ''){ ?>
		<li class="active">
			<strong><?php echo $breadcumb ?></strong>
		</li>
		<?php } ?>
	</ul>
	<hr/>	
	
	<span class=""><?php echo $this->session->flashdata('op_msg'); ?></span>
	<div class="row">
	  	<div class="col-md-8">
	  		<div class="content-box-large">
				<div class="panel-heading">
			        <div class="panel-title" style="font-weight:600;padding: 0px;">Add / Update Industry</div>
				</div>
				<hr/>
			  	<div class="panel-body" style="padding-top: 0px;">
					<form action="<?php echo base_url() ?>industry/manage" class="form-horizontal" role="form"  method="post" enctype= "multipart/form-data">
						<div class="form-group">
							<label for="categoryname" class="col-sm-4 control-label">Industry Name</label>
							<div class="col-sm-8">
							   <input type="text" class="form-control" id="cname" placeholder="Industry name" value="<?php echo $cate_name ?>" name="cname" required>
							</div>
						</div>
						<div class="form-group">
							<label for="skillimage" class="col-sm-4 control-label">Industry Image</label>
							<div class="col-sm-6">
							   <input type="file" class="form-control" id="cimage" name="cimage" required>
							</div>
							<div class="col-sm-2">
								<span>
									<img alt="Upload Pic" src="<?php echo ((!$cate_image || trim($cate_image) == '') ? BASE_FRONT_URL.'public/images/industry/no_image.png' : BASE_FRONT_URL.'public/images/industry/'.$cate_image);?>" class="img-thumbnail img-responsive" style="height:50px;width:50px">
							   </span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Deleted</label>
							
							 <input type="checkbox" name="status" <?php echo ($cate_del == 1 ? "checked" : "") ?>>
							
						</div>
						<hr/>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-12" style="text-align:right">
									<a href="<?php echo base_url();?>industry/listing" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back</a>
									<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 
									<?php echo (($cate_row <> 0) ? 'Update ' : 'Add ') ?></button>
									<input type="hidden" value="<?php echo $cate_row; ?>" name="row_id" />
									<input type="hidden" value="<?php echo (($cate_row <> 0) ? 'update' : 'create') ?>" name="action" />
								</div>
							</div>
						</div>
					</form>
			  	</div>
			</div>
	 	</div>
	</div>
</div>	