<div class="container user-content-wrapper">
    <div class="row">

        <div class="col-md-12">
            <?php echo form_open('user_controller/save_quotation'); ?>
            <?php
            if(!empty($success)){
                echo '<div class="alert alert-info" role="alert"><strong>Heads up! </strong>'.$success.'</div>';
            }
            ?>
            <fieldset>
                <legend>Add Another Item</legend>
                <table class="table" style="margin-bottom: 0px;">
                    <tbody>
                    <tr>
                        <td style="width: 25%;">
                            <label>Quotation Id: </label>  <span class="text-danger">(Auto)</span>
                            <input typeof="text" name="quotation_id" readonly="" required="" value="<?php echo (isset($quotation_id)?$quotation_id:1); ?>" class="form-control">
                        </td>
                        <td style="width: 40%;">
                            <label>Date Created: </label>  <span class="text-danger">(Auto)</span>
                            <input typeof="text" name="created_at" readonly="" value="<?php echo DATETIMENOW(); ?>" class="form-control">
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>



                <table class="table">
                    <tbody>
                    <tr>
                        <td colspan="2">
                            <label>Item Description: </label>  <span class="text-danger">(Required)</span>
                            <input type="text" name="product_description" required="" class="form-control" placeholder="Example: 6202 ZZ NTN JAPAN BALL BEARING" autofocus="" title="Enter your item description what you need.">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Quantity Unit: </label>  <span class="text-danger">(Required)</span>
                            <input type="text" name="quantity_unit" required="" class="form-control" placeholder="12" title="How many quantity you need to buy.">
                        </td>

                        <td>
                            <label>Expected Price: </label>  <span class="text-success">(Not Required)</span>
                            <input type="text" name="expected_price" class="form-control" placeholder="150" title="Which price you want to pay for this product.">
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3"><input type="submit" class="btn btn-warning btn-block" value="Add Item" </td>
                    </tr>
                    </tfoot>
                </table>
                <?php echo form_close(); ?>
            </fieldset>


        </div>
    </div>
</div>
<!--#user-content-wrapper-->