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
                             Category List <span class="pull-right" ><a href="<?php echo base_url()."category/add" ?>"><span class="fa fa-plus"></span>Add category</a></span>
                          </header>
                          <div class="panel-body">
                              <div class="form form-group">
                                  <table class="table table-striped table-bordered table-hover col-sm-12">
                                   <thead>
                                    <tr>
                                        <th class="col-sm-1">SN.</th>
                                        <th class="col-sm-3">Title</th>
                                        <th class="col-sm-7">Description</th>
                                        <th ></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $i=1;
                                            foreach($list as $item)
                                            {
                                               
                                                ?>
                                                <tr>
                                                <td> <?php echo $i;?></td>
                                                <td><strong><?php echo $item["CategoryTitle"]; ?></strong></td>
                                                <td<?php echo $item["CategoryDescription"]; ?></td>
                                                <td>
                                                    <span class="fa fa-pencil"></span>|
                                                    <span class="fa fa-list"></span>|
                                                    <span class="fa fa-trash-o"></span>
                                                </td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                        ?>
                                    </tbody>
                                  </table>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  