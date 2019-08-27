<?php include ('layout/header.php'); ?>
<?php include ('layout/sidebar.php'); ?>

	<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>LOGO PREVIEW</h2>
			</div>
			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<div class="text-left">
                        		<h2>
                                	LOGOS
                            	</h2>
                        	</div>
                            <div class="text-right" style="margin-top: -24px;">
                            	<button class="btn btn-success waves-effect" data-toggle="modal" data-target="#addLogo">
                            		<i class="material-icons">add_box</i>
                            			<span>Add Logo</span>
                            	</button>	
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Logo Name</th>
                                        <th>Preview</th>
                                        <th>Updated Date</th>
                                        <th>Updated By</th>
                                        <th>Is Default</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Otto</td>
                                        <td>
                                        	<input type="checkbox" id="logo_1" class="filled-in chk-col-green" checked="">
                                        	<label for="logo_1"></label>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Thornton</td>
                                        <td>
                                        	<input type="checkbox" id="logo_2" class="filled-in chk-col-green" checked="">
                                        	<label for="logo_2"></label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->

            <div class="block-header">
				<h2>SCHOOL PREVIEW</h2>
			</div>

			<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SCHOOL PROFILE
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="school_name_kh">ឈ្មោះសាលា</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="school_name_kh" class="form-control" placeholder="Enter school name in Khmer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="school_name">School Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="school_name" class="form-control" placeholder="Enter school name in English">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="phone_no">លេខទូរស័ព្ទ</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="phone_no" class="form-control" placeholder="Enter phone number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="main_office">ទីតាំងការិ កណ្តាល</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="main_office" class="form-control" placeholder="Enter main office">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="schedule_1">Schedule Note1</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="schedule_1" class="form-control" placeholder="Enter schedule note 1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="schedule_2">Schedule Note2</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="schedule_2" class="form-control" placeholder="Enter schedule note 2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="button" class="btn btn-success m-t-15 waves-effect">Apply</button>
                                        <button type="button" class="btn btn-danger m-t-15 waves-effect">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->

            <div class="block-header">
				<h2>BRANCH PREVIEW</h2>
			</div>
			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<div class="text-left">
                        		<h2>
                                	BRANCHES
                            	</h2>
                        	</div>
                            <div class="text-right" style="margin-top: -24px;">
                            	<button class="btn btn-success">
                            		<i class="material-icons">add_box</i>
                            			<span>New Branch</span>
                            	</button>	
                            </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Note</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><a href="#">Edit</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><a href="#">Edit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->

            <!-- Add LOGO -->
            <div class="modal fade" id="addLogo" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="defaultModalLabel">NEW LOGO</h4>
                        </div>
                        <hr>
                        <div class="modal-body">
                        	<form class="form-line">
                        		<div class="row">
                        			<div class="col-md-4">
                        				<label>Logo Name</label>
                        			</div>
                        			<div class="col-md-8">
                        				<input type="text" name="txtlogo_name" class="form-control">
                        			</div>
                        		</div><br>
                        		<div class="row">
                        			<div class="col-md-4">
                        				<label >Logo</label>                 				
                        			</div>
                        			<div class="col-md-8">
                        				<input type="file" name="txtlogo">
                        			</div>
                                </div><br>
                                <div class="row">
                                	<div class="col-md-4">
                                		<label>Preview</label>
                                	</div>
                                	<div class="col-md-8">
                                		
                                	</div>
                                </div><br>
                                <div class="row">
                                	<div class="col-md-4">
                                		<label>Use as Default Logo</label>
                                	</div>
                                	<div class="col-md-8">
                                		<div class="demo-checkbox">
                                			<label for="md_checkbox_10">GREEN</label>
                                        	<input type="checkbox" id="md_checkbox_10" class="chk-col-green" checked />
                                        </div>
                                	</div>
                                </div>
                        	</form>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect">Upload</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</section>

<?php include ('layout/footer.php'); ?>