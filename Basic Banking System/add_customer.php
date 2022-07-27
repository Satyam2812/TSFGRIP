<html>
    <head>
      <title>Create a new user form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/add_customer.css"/>
    </head>

    <body>
      <?php
          include "includes/header.php";
       ?>
    <div class="container-fluid ps-md-0">
 
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Add Customer form</h3>

              <!-- Sign In Form -->
              <form action="add_customer_submit.php" method="post">
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="name" id="name" >
                  <label for="Name">Full Name</label>
                </div>
              
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                  <label for="email">Email Address</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="address" id="address" required>
                  <label for="address">Permanent Address</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="account_number" id="account_number" maxlength="13" minlength="13" required>
                  <label for="account_number">Assign a account number to the user</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="account_number" id="account_number" maxlength="10" minlength="10" required>
                  <label for="phone_number">Phone Number(Without Prefix)</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="number" class="form-control" name="curr_balance" id="curr_balance" required>
                  <label for="curr_balance">Opening Balance</label>
                </div>
              
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Create User</button>
                </div>

              </form>
            </div>
          </div>
        </div>
    </body>
</html>
