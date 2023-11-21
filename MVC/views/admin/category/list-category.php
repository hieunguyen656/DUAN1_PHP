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
                    <h4 class="page-title">Danh sách Danh mục</h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-success">
                                <a href="index.php?url=add-category">Thêm mới</a>
                            </button>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Danh Mục</th>
                                    <th scope="col">Tên Danh Mục</th>
                                    <th scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_category as $key => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $value['id'] ?></th>
                                        <td><?= $value['name'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning">
                                                <a href="index.php?url=edit-category&id=<?php echo $value['id'] ?>">Sửa</a>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <a href="index.php?url=delete-category&id=<?php echo $value['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?!')">Xóa</a>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>