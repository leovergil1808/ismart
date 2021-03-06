<?php
get_header();
?>

<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách danh mục sản phẩm</h3>
                    <a href="?mod=products&action=addProductCat" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <?php if (!empty($list_product_cat)) {
                            ?>
                            <table class="table list-table-wp">
                                <thead>
                                    <tr>
                                        <!-- <td><input type="checkbox" name="checkAll" id="checkAll"></td> -->
                                        <td><span class="thead-text">STT</span></td>
                                        <td><span class="thead-text">Tên danh mục</span></td>
                                        <td><span class="thead-text">Thứ tự</span></td>
                                        <td><span class="thead-text">Người tạo</span></td>
                                        <td><span class="thead-text">Ngày tạo</span></td>
                                        <td><span class="thead-text">Người sửa</span></td>
                                        <td><span class="thead-text">Ngày đổi</span></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $temp = 0;
                                    foreach ($list_product_cat as $product_cat) {
                                        $temp ++;
                                        ?>
                                        <tr>
                                            <!-- <td><input type="checkbox" name="checkItem" class="checkItem"></td> -->
                                            <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
                                            <td class="clearfix">
                                                <div class="tb-title fl-left">
                                                    <a href="" title=""><?php echo $product_cat['cat_title']; ?></a>
                                                </div> 
                                                <ul class="list-operation fl-right">

                                                    <li><a href="<?php echo $product_cat['url_edit']; ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo $product_cat['url_delete']; ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                            <td><span class="tbody-text"><?php echo $product_cat['level']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo $product_cat['creator']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo time_format($product_cat['created_date']); ?></span></>
                                            <td><span class="tbody-text"><?php echo $product_cat['editor']; ?></span></td>
                                            <td><span class="tbody-text"><?php echo time_format($product_cat['edit_date']); ?></span></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                    <!-- <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text">2</h3></span>
                        <td class="clearfix">
                            <div class="tb-title fl-left">
                                <a href="" title="">--- Trong nước</a>
                            </div>
                            <ul class="list-operation fl-right">
                                <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </td>
                        <td><span class="tbody-text">1</span></td>
                        <td><span class="tbody-text">Hoạt động</span></td>
                        <td><span class="tbody-text">Admin</span></td>
                        <td><span class="tbody-text">12-07-2016</span></td>
                    </tr> -->
                    <!-- <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text">3</h3></span>
                        <td class="clearfix">
                            <div class="tb-title fl-left">
                                <a href="" title="">--- Bên lề</a>
                            </div>
                            <ul class="list-operation fl-right">
                                <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </td>
                        <td><span class="tbody-text">1</span></td>
                        <td><span class="tbody-text">Hoạt động</span></td>
                        <td><span class="tbody-text">Admin</span></td>
                        <td><span class="tbody-text">12-07-2016</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text">4</h3></span>
                        <td class="clearfix">
                            <div class="tb-title fl-left">
                                <a href="" title="">Thế giới</a>
                            </div>
                            <ul class="list-operation fl-right">
                                <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </td>
                        <td><span class="tbody-text">0</span></td>
                        <td><span class="tbody-text">Hoạt động</span></td>
                        <td><span class="tbody-text">Admin</span></td>
                        <td><span class="tbody-text">12-07-2016</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text">5</h3></span>
                        <td class="clearfix">
                            <div class="tb-title fl-left">
                                <a href="" title="">--- Trong nước</a>
                            </div>
                            <ul class="list-operation fl-right">
                                <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </td>
                        <td><span class="tbody-text">4</span></td>
                        <td><span class="tbody-text">Hoạt động</span></td>
                        <td><span class="tbody-text">Admin</span></td>
                        <td><span class="tbody-text">12-07-2016</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text">6</h3></span>
                        <td class="clearfix">
                            <div class="tb-title fl-left">
                                <a href="" title="">--- Bên lề</a>
                            </div>
                            <ul class="list-operation fl-right">
                                <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                            </ul>
                        </td>
                        <td><span class="tbody-text">4</span></td>
                        <td><span class="tbody-text">Hoạt động</span></td>
                        <td><span class="tbody-text">Admin</span></td>
                        <td><span class="tbody-text">12-07-2016</span></td>
                    </tr> -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <!-- <td><input type="checkbox" name="checkAll" id="checkAll"></td> -->
                                        <td><span class="tfoot-text">STT</span></td>
                                        <td><span class="tfoot-text-text">Tiêu đề</span></td>
                                        <td><span class="tfoot-text">Thứ tự</span></td>
                                        <td><span class="tfoot-text">Người tạo</span></td>
                                        <td><span class="tfoot-text">Ngày tạo</span></td>
                                        <td><span class="thead-text">Người sửa</span></td>
                                        <td><span class="thead-text">Ngày đổi</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        <?php }
                        ?>

                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <!-- <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p> -->
                    <?php echo get_pagging($num_page, $page, "?mod=products&action=listProductCat"); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
