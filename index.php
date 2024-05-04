<?php include("db.php"); ?>

<?php include("./includes/header.php"); ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">
                <form action="save_task.php" method="$_POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Title"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Save task">
                </form>
            </div>
        </div>

    </div>

</div>

<?php include("./includes/footer.php"); ?>