<?php include 'header.php'?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Sum of Series</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" class="form-control" value="<?php echo isset($result['starting_number']) ? $result['starting_number']: ' '; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" class="form-control" value="<?php echo isset($result['ending_number']) ? $result['ending_number']: ' '; ?>" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5"><?php echo isset($result['result']) ? $result['result']: ' '; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="series_btn" class="btn btn-outline-success" value="submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>
