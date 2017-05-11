<?php
    include('includes/HeaderSection.php'); 
?>
        <div class="row">
        <div class="callout medium-6 columns">
            <div class="row float-center">
                <div class="label small-12 columns text-center secondary">Already a member</div>
            </div><br>
            <div>
            <form>
              <div class="row">
                <div class="small-3 columns">
                    <label for="middle-label" class="text-right">Email</label>
                </div>
                <div class="small-9 columns">
                    <input type="text" placeholder="Enter Email">
                </div>
                <div class="small-3 columns">
                    <label for="middle-label" class="text-right">Password</label>
                </div>
                <div class="small-9 columns">
                    <input type="Password" placeholder="Enter Password">
                </div>
                  <div class="medium-12 float-center">
                       <button type="button" class="button float-center">Login</button>
                  </div>
                  <div class="row">
                   <div class="small-12 columns">
                    <label for="middle-label" class="text-center">Become a member?<br></label>
                </div>
                   <div class="large-12">
                       <button type="button" class="button float-center">Join Now</button>
                  </div>
                    </div>
              </div>
            </form>
            </div>
        </div>
      </div>
<?php
        include('includes/FooterSection.php');
?>