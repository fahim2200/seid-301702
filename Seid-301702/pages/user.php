<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <div class="card ">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-success text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user){?>
                            <tr>
                                <td><?php echo $user['id'] ;?></td>
                                <td><?php echo $user['name'] ;?></td>
                                <td><?php echo $user['email'] ;?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

