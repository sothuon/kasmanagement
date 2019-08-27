
    <section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<h2>STUDENT LIST</h2>
			</div>
			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<div class="text-left">
                        		<h2>
                                	STUDENTS
                            	</h2>
                        	</div>
                            <div class="text-right" style="margin-top: -24px;">
                            	<button class="btn btn-success waves-effect" data-toggle="modal" data-target="#addLogo">
                            		<i class="material-icons">add_box</i>
                            			<span>Add New</span>
                            	</button>	
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->

            <!-- Add Student Popup -->
            <form method="POST" enctype="multipart/form-data" action="<?=base_url().'student_controller/student_insert'?>">
                <div class="modal fade" id="addLogo" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center" id="defaultModalLabel">NEW STUDENT</h4>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <form class="form-line" method="POST" action="<?php base_url();?>student_controller/student_insert">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>English Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="txteng_name" class="form-control" placeholder="Enter English Name">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Khmer Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="txtkh_name" class="form-control" placeholder="Enter Khmer Name">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input name="gender" type="radio" class="with-gap" id="radio_m"  checked />
                                            <label for="radio_m">Male</label>
                                            <input name="gender" type="radio" class="with-gap" id="radio_f" />
                                            <label for="radio_f">Female</label>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label >Photo</label>                               
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" name="txtphoto">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Date of Birth</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-line" id="bs_datepicker_container">
                                                <input type="text" name="dateofbirth" class="form-control" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-line">
                                                <textarea rows="2" name="addr" class="form-control no-resize auto-growth" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Contact</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="txtcontact" class="form-control" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success waves-effect">Upload</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            

		</div>
	</section>
