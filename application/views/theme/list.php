
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Codeigniter 3 CRUD Example from scratch</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="<?php echo base_url('itemCRUD/create') ?>"> Create New Item</a>

        </div>

    </div>

</div>


<table class="table table-bordered">


  <thead>

      <tr>

          <th>Title</th>

          <th>Description</th>

          <th width="220px">Action</th>

      </tr>

  </thead>


  <tbody>

   <?php foreach ($data as $item) { ?>      

      <tr>

          <td><?php echo $item->title; ?></td>

          <td><?php echo $item->description; ?></td>          

      <td>

        <form method="DELETE" action="<?php echo base_url('itemCRUD/delete/'.$item->id);?>">

          <a class="btn btn-info" href="<?php echo base_url('itemCRUD/'.$item->id) ?>"> show</a>

         <a class="btn btn-primary" href="<?php echo base_url('itemCRUD/edit/'.$item->id) ?>"> Edit</a>

          <button type="submit" class="btn btn-danger"> Delete</button>

        </form>

      </td>     

      </tr>

      <?php } ?>

  </tbody>


</table>

application/views/itemCRUD/create.php

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Item</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="<?php echo base_url('itemCRUD');?>"> Back</a>

        </div>

    </div>

</div>


<form method="post" action="<?php echo base_url('itemCRUDCreate');?>">

    <?php


    if ($this->session->flashdata('errors')){

        echo '<div class="alert alert-danger">';

        echo $this->session->flashdata('errors');

        echo "</div>";

    }


    ?>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                <input type="text" name="title" class="form-control">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Description:</strong>

                <textarea name="description" class="form-control"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>


</form>