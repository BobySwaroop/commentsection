<?php
$conn = mysqli_connect('localhost', 'root', '', 'task');


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .link-muted {
      color: #aaa;
    }

    .link-muted:hover {
      color: #1266f1;
    }
  </style>
  <title>Hello, world!</title>
</head>

<body>

  <section style="background-color: #d94125;">
    <div class="container my-5 py-5 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-6">
          <div class="card">
            <div class="card-body p-4">
              <div class="d-flex flex-start w-100">
                <img class="rounded-circle shadow-1-strong me-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoq0f1tSU2b8opZaApGh5tl2FreFb52dyo6Q&usqp=CAU" alt="avatar" width="65" height="65" />
                <div class="w-100">
                  <h5>Add a comment</h5>
                  <form method="post" action="send.php">
                    <div class="form-field">
                      <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-outline pt-4">
                      <textarea class="form-control" name="msg" id="textAreaExample" rows="4"></textarea>
                      <label class="form-label" for="textAreaExample">What is your view?</label>
                    </div>

                    <button type="submit" name="sub" class="btn btn-danger">
                      Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section style="background-color: #e7effd;">
    <div class="container my-5 py-5 text-dark">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11 col-lg-9 col-xl-7">
          <div class="d-flex flex-start mb-4">
            <img class="rounded-circle shadow-1-strong me-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkzDNJafJYG9uHUJODpIQpeXLwB5aXcg3skw&usqp=CAU" alt="avatar" width="65" height="65" />
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="">
                  <!-- comment section fetch -->
                  <?php
                  $sql = "SELECT `name`, `message` FROM `send_data`";
                  $res = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                      ?>
                       <h5><?php echo $row['name'];?></h5>
                  <p class="small">3 hours ago</p>
                  <p>
                    <?php echo $row['message'];?> </p>
                      <?php
                    }
                  }
                  ?>
                 

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                      <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a>
                    </div>
                    <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex flex-start">
            <img class="rounded-circle shadow-1-strong me-3" src="https://img.freepik.com/premium-vector/female-user-profile-avatar-is-woman-character-screen-saver-with-emotions_505620-617.jpg?w=2000" alt="avatar" width="65" height="65" />
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="">
                  <h5>Mindy Campbell</h5>
                  <p class="small">5 hours ago</p>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                    cumque doloribus dolorum dolor repellat nemo animi at iure autem fuga
                    cupiditate architecto ut quam provident neque, inventore nisi eos quas?
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                      <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                    </div>
                    <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>