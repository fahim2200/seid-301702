<?php include 'header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="POST">
                    <input id="search"  class="form-control" name="search" type="text" placeholder="Type here"/>
                    <input name="search_btn" class="btn btn-outline-success" type="submit" value="Search"/>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php if (isset($result['id'])) {?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $result['image'];?>" alt="" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $result['name'];?></h3>
                            <h3 class=""><?php echo $result['price'];?></h3>
                            <hr/>
                            <a href="action.php?pages=detail&&id=<?php echo $result['id'];?>" class="btn btn-dark">Details</a>
                        </div>
                    </div>
                </div>
            <?php } else {?>
                <h3 class="text-danger">No Product Found</h3>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'footer.php';?>

