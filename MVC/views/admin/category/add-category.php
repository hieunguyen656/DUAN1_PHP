<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div>
    <style>
        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: white;
        }
    </style>
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Thêm mới Danh mục</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <?php
                        if (isset($message) && $message != ""){
                            echo $message;
                        }
                        ?>
                        <div class="card-body">
                            <button type="button" class="btn btn-success">
                                <a href="index.php?url=list-category">Danh sách</a>
                            </button>
                        </div>
                        <form class="form-horizontal" action="index.php?url=add-category" method="post">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên danh mục</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Nhập tên danh mục" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                                    </div>
                                </div> -->
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="reset" class="btn btn-danger">Nhập lại</button>
                                    <button type="button" name="add" class="btn btn-primary">Thêm mới</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>