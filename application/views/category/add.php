      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <!--<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Category</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Add</a></li>
						
					</ol>
				</div>
			</div>-->
              <!-- Form validations -->              
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Add Category <span class="pull-right" ><a href="<?php echo base_url()."category/index" ?>">Back to List</a></span>
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="categoryadd_form" method="post" action="<?php echo base_url()."Category/PostAdd"?>">
                                      <div class="form-group ">
                                          <label for="CategoryTitle" class="control-label col-sm-2">Category Title <span class="required">*</span></label>
                                          <div class="col-sm-10">
                                              <input class=" form-control" id="CategoryTitle" name="CategoryTitle" type="text" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="CategoryDescription" class="control-label col-sm-2">Description </label>
                                          <div class="col-sm-10">
                                              <textarea class=" form-control" id="CategoryDescription" name="CategoryDescription">
                                              </textarea>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-sm-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  