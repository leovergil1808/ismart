<div class="sidebar fl-left">
    <div class="section" id="category-product-wp">
        <div class="section-head">
            <h3 class="section-title">Danh mục sản phẩm</h3>
        </div>

        <div class="section-detail">
            <ul class="list-item">
                <li>
                    <a href="phone-1.html" title="">Điện thoại</a>
                </li>
                <li>
                    <a href="tablet-2.html" title="">Máy tính bảng</a>
                </li>
                <li>
                    <a href="laptop-3.html" title="">laptop</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="section" id="filter-product-wp">
        <div class="section-head">
            <h3 class="section-title">Bộ lọc</h3>
        </div>

        <div class="section-detail">
            <form method="POST" action="" id="filter-product">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Giá</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="radio" name="r-price" value="1"></td>
                            <td>Dưới 500.000đ</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" value="2"></td>
                            <td>500.000đ - 1.000.000đ</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" value="3"></td>
                            <td>1.000.000đ - 5.000.000đ</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" value="4"></td>
                            <td>5.000.000đ - 10.000.000đ</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="r-price" value="5"></td>
                            <td>Trên 10.000.000đ</td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" name="btn-submit" value="Lọc">
            </form>
        </div>
    </div>
    
    <div class="section" id="banner-wp">
        <?php
        if (!empty($list_media_banner)) {
            ?>
            <div class="section-detail">
                <?php
                foreach ($list_media_banner as $item) {
                    ?>
                    <a href="" title="" class="thumb">
                        <img src="<?php echo $item['thumbnail']; ?>" alt=""><br>
                    </a>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>