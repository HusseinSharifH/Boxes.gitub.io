<?php
    $cssPageLink = "css/home.css"
?>

<?php include "templates/header.php" ?>

    <?php include "templates/sideBar.php" ?>

    <section>
        <button class="add-product">
            <i class="fas fa-plus"></i>
            إضافة منتج
        </button>

        <!-- Start display products -->
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>الاسم</th>
                    <th>السعر</th>
                    <th>الخصم</th>
                    <th>الكمية</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="img/test.png" alt="Product image" class="product-img">
                    </td>
                    <td>iphone</td>
                    <td>10.500</td>
                    <td>10%</td>
                    <td>43</td>
                    <td>
                        <button class="edit">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                    <td>
                        <button class="delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <img src="img/test.png" alt="Product image" class="product-img">
                    </td>
                    <td>iphone</td>
                    <td>10.500</td>
                    <td>10%</td>
                    <td>43</td>
                    <td>
                        <button class="edit">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                    <td>
                        <button class="delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <img src="img/test.png" alt="Product image" class="product-img">
                    </td>
                    <td>iphone</td>
                    <td>10.500</td>
                    <td>10%</td>
                    <td>43</td>
                    <td>
                        <button class="edit">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                    <td>
                        <button class="delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img src="img/test.png" alt="Product image" class="product-img">
                    </td>
                    <td>iphone</td>
                    <td>10.500</td>
                    <td>10%</td>
                    <td>43</td>
                    <td>
                        <button class="edit">
                            <i class="fas fa-pen"></i>
                        </button>
                    </td>
                    <td>
                        <button class="delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End display products -->

    </section>

</body>
</html>