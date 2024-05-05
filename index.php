<?php include("db.php"); ?>

<?php include("./includes/header.php"); ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

        <?php if ($_SESSION['message']) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>

            <div class="card card-body">
                <form action="./save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                    </div>
                    <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save task">
                </form>
            </div>
        </div>

    </div>

</div>

<?php include("./includes/footer.php"); ?>