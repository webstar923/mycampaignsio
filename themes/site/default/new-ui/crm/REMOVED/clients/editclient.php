<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if( ! isset( $current_page ) ){
    global $current_page;
    $current_page = 'business-clients-edit';
}

require FCPATH . '/themes/site/default/new-ui/parts/top.php';

?>

<div class="content-row">
    <div class="content-column w-100 w-two-thirds-l">
        <div class="content-column-main">
            <div class="title">
                <div class="left-pos">
                    <h3>EDIT CLIENT</h3>
                </div>
            </div>
            <div class="content-column-inner">
                <form action="<?php echo site_url(); ?>editclient" method="post" class="edit-profile-form cf" style="width: 100%;">
                    <div class="field">
                        <label for="">First name:</label>
                        <input type="text" name="first_name"  value="<?php echo $client['firstname']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Last name:</label>
                        <input type="text" name="last_name"  value="<?php echo $client['lastname']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Company name:</label>
                        <input type="text" name="company_name"  value="<?php echo $client['companyname']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Phone Number:</label>
                        <input type="text" name="phone_number"  value="<?php echo $client['phonenumber']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Email address:</label>
                        <input type="text" name="email"  value="<?php echo $client['email']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Credit Limit:</label>
                        <input type="text" name="credit_limit" value="<?php echo $client['creditlimit']; ?>">
                    </div>
                    <div class="field">
                        <label for="">Terms:</label>
                        <select name="terms" value="<?php echo $client['terms']; ?>" >
                            <?php
                                if ($client['terms'] == 0) {
                                   echo "<option value='0' selected>On Delivery</option>
                                        <option value='7'> 7 Days</option>
                                        <option value='14'>14 Days</option>
                                        <option value='30'>30 Days</option>
                                        <option value='60'>60 Days</option>";
                                 } 
                                if ($client['terms'] == 7) {
                                   echo "<option value='0'>On Delivery</option>
                                        <option value='7' selected> 7 Days</option>
                                        <option value='14'>14 Days</option>
                                        <option value='30'>30 Days</option>
                                        <option value='60'>60 Days</option>";
                                 } 
                                if ($client['terms'] == 14) {
                                   echo "<option value='0'>On Delivery</option>
                                        <option value='7' selected> 7 Days</option>
                                        <option value='14' selected>14 Days</option>
                                        <option value='30'>30 Days</option>
                                        <option value='60'>60 Days</option>";
                                 } 
                                if ($client['terms'] == 30) {
                                   echo "<option value='0'>On Delivery</option>
                                        <option value='7' selected> 7 Days</option>
                                        <option value='14'>14 Days</option>
                                        <option value='30' selected>30 Days</option>
                                        <option value='60'>60 Days</option>";
                                 } 
                                if ($client['terms'] == 60) {
                                   echo "<option value='0'>On Delivery</option>
                                        <option value='7' selected> 7 Days</option>
                                        <option value='14'>14 Days</option>
                                        <option value='30'>30 Days</option>
                                        <option value='60' selected>60 Days</option>";
                                 }    
                            ?>
                        </select>
                    </div>
                    <div class="field">
                    </div>
                    <input type="hidden" name="clientid" value="<?php echo $client['id']; ?>">
                    <hr class="relative fl w-100" style="margin-top:0;">
                    <div class="relative fl w-100">
                        <button type="submit" onclick="return validate_edit_user_form();" class="btn-color no-underline pointer ba f7 fw5 lh-solid pv3 ph4 br1"><span class="white">UPDATE CLIENT</span>
                        </button>
                        <a href="<?php echo site_url(); ?>listclient" title="" class="fr btn-lines no-underline pointer ba f7 fw5 lh-solid pv3 ph4 br1"><span class="">CANCEL</span></a>
                    </div>    
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require FCPATH . '/themes/site/default/new-ui/parts/bottom.php'; ?>