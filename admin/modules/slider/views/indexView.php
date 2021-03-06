<?php
get_header();
?>
<div id="main-content-wp" class="list-product-page list-slider">
    <div class="wrap clearfix">
        <?php get_sidebar(); ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách slider</h3>
                    <a href="?mod=slider&action=addSlider" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="?mod=slider&action=index">Tất cả <span class="count">(<?php echo $num_rows; ?>)</span></a> |</li>
                            <li class="publish"><a href="?mod=slider&action=showApprovedSlider">Đã đăng <span class="count">(<?php echo $num_rows_approved; ?>)</span></a> |</li>
                            <li class="pending"><a href="?mod=slider&action=showWaitingSlider">Chờ xét duyệt<span class="count">(<?php echo $num_rows_waiting; ?>)</span></a> |</li>
                            <li class="pending"><a href="?mod=slider&action=showTrashSlider">Thùng rác<span class="count">(<?php echo $num_rows_trash; ?>)</span></a></li>
                        </ul>

                        <div class="actions">

                            <form method="GET" class="form-s fl-right">

                                <input type="hidden" name="mod" value="slider">
                                <input type="hidden" name="action" value="index">
                                <!-- <select name="search_by">
                                    <option value="">Tìm theo :</option>
                                    <option value="code">Mã sản phẩm</option>
                                    <option value="title">Tên sản phẩm</option>
                                    <option value="creator">Người tạo</option>
                                </select> -->
                                <input type="text" name="s" id="s">
                                <input type="submit" name="sm_s" value="Tìm kiếm">
                            </form>
                        </div>
                    </div>
                    <form method="POST" action="" class="form-actions">
                        <div class="actions">

                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">1. Gỡ, tạm chỉnh sửa</option>
                                <option value="2">2. Tạm xoá slider</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">

                        </div>
                        <div class="table-responsive">
                            <?php
                            if (!empty($list_slider)) {
                                ?>
                                <table class="table list-table-wp">
                                    <thead>
                                        <tr>
                                            <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                            <td><span class="thead-text">STT</span></td>
                                            <td><span class="thead-text">Tiêu đề</span></td>
                                            <!-- <td><span class="thead-text">Thứ tự</span></td> -->
                                            <td><span class="thead-text">Trạng thái</span></td>
                                            <td><span class="thead-text">Người tạo</span></td>
                                            <td><span class="thead-text">Ngày tạo</span></td>
                                            <td><span class="thead-text">Người duyệt</span></td>
                                            <td><span class="thead-text">Ngày duyệt</span></td>
                                            <td><span class="thead-text">Người sửa</span></td>
                                            <td><span class="thead-text">Ngày sửa</span></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $temp = 0;
                                        foreach ($list_slider as $item) {
                                            $temp ++;
                                            ?>
                                            <tr>
                                                <td><input type="checkbox" name="checkItem[]" value="<?php echo $item['id'] ?>" class="checkItem"></td>
                                                <td><span class="tbody-text"><?php echo $temp; ?></h3></span>
                                                <!-- <td>
                                                    <div class="tbody-thumb">
                                                        <img src="public/images/img-product.png" alt="">
                                                    </div>
                                                </td> -->
                                                <td class="clearfix">
                                                    <div class="tb-title fl-left">
                                                        <a href="" title=""><?php echo $item['title']; ?></a>
                                                    </div>
                                                    <ul class="list-operation fl-right">
                                                        <li><a href="<?php echo $item['url_edit']; ?>" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                        <li><a href="<?php echo $item['url_move_trash']; ?>" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </td>
                                                <!-- <td><span class="tbody-text">1</span></td> -->
                                                <td><span class="tbody-text <?php echo $item['status_css']; ?>"><?php echo $item['status']; ?></span></td>
                                                <td><span class="tbody-text" ><?php echo $item['creator']; ?></span></td>
                                                <td><span class="tbody-text"><?php echo time_format($item['created_date']); ?></span></td>
                                                <td><span class="tbody-text"><?php echo $item['approver']; ?></span></td>
                                                <td><span class="tbody-text"><?php echo time_format($item['approval_date']); ?></span></td>
                                                <td><span class="tbody-text"><?php echo $item['editor']; ?></span></td>
                                                <td><span class="tbody-text"><?php echo time_format($item['edit_date']); ?></span></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                            <td><span class="tfoot-text">STT</span></td>
                                            <td><span class="tfoot-text">Tiêu đề</span></td>
                                            <!-- <td><span class="tfoot-text">Thứ tự</span></td> -->
                                            <td><span class="tfoot-text">Trạng thái</span></td>
                                            <td><span class="tfoot-text">Người tạo</span></td>
                                            <td><span class="tfoot-text">Ngày tạo</span></td>
                                            <td><span class="thead-text">Người duyệt</span></td>
                                            <td><span class="thead-text">Ngày duyệt</span></td>
                                            <td><span class="thead-text">Người sửa</span></td>
                                            <td><span class="thead-text">Ngày sửa</span></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <?php echo get_pagging($num_page, $page, "?mod=slider&action=index") ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>