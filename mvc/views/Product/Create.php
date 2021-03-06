<?php
    $ds_pnhom = $params["data"];
?>
<style>
    .content > a{
        text-decoration: none;
        color: orangered;
        margin: 2rem;
        display: block;
        box-shadow: 1px 1px 2px gray;
        width: fit-content;
        padding: 0.4rem 0.3rem;
    }
    .main-form{
        width: 90%;
        margin: auto;
        padding: 0.5rem;
        box-shadow: 1px 1px 2px gray , 1px -1px 2px gray;
    }
    .main-form form{
        width: 100%;
        height: 100%;
    }
    .main-form form > div{
        width: 100%;
        margin: 0.5rem 0;
        display: flex;
        align-items: center;
    }
    .main-form form > div > *{
        width: 100%;
    }
    .main-form form > div > label{
        width: 100%;
        flex-shrink: 2;
    }
    .main-form form > .form-btn {
        display: block;
        text-align: center;
    }
    .main-form form > .form-btn button{
        width: 100px;
        background-color: green;
        color: white;
        border-radius: 3px;
        border: none;
        outline: none;
        padding: 0.3rem;
        box-shadow: 1px 1px 2px gray , 1px -1px 2px gray;
        cursor: pointer;
    }
    .main-form form > .form-btn button:hover{
        background-color: orangered;
    }
    .form-control #info{
       text-align: center;
    }
</style>
<a href="?url=Admin/QuanLySanPham">Back</a>
<div class="main-form">
    <form action="?url=Admin/CreateSanPham" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <label for="">Mã sản phẩm: </label>
            <input type="text" id="ma-sp" name="id" required>
        </div>
        <div class="form-control">
            <span id="info"></span>
        </div>
        <div class="form-control">
            <label for="">Tên sản phẩm: </label>
            <input type="text" name="ten_sp" required>
        </div>
        <div class="form-control">
            <label for="">Tên chủ thể sx: </label>
            <input type="text" name="chu_the_sx" required>
        </div>
        
        <div class="form-control">
            <label for="">Địa chỉ: </label>
            <input type="text" name="dia_chi" required>
        </div>
        <div class="form-control">
            <label for="">Hình sản phẩm: </label>
            <input type="file" name="picture-file" accept="image/*">
        </div>
        <div class="form-control">
            <label for="">Link hồ sơ: </label>
            <input type="text" name="link_ho_so">
        </div>
        <div class="form-control">
            <label for="">Phân nhóm sp: </label>
            <select name="phan_nhom" id="">
               <?php
                    while($row = $ds_pnhom->fetch_assoc()){
               ?>
                <option value="<?php echo $row["id_phan_nhom"] ?>"><?php echo $row["ten_phan_nhom"]?></option>
               <?php } ?>
            </select>
        </div>

        <div class="form-btn">
            <button type="submit" id="btn-ok" name="create">OK</button>
        </div>
    </form>
</div>
<div class="message">
    <p style="color:red"><?php echo $params["message"]?></p>
</div>
<script src="./themes/quan-ly-san-pham/js/check-ma-sp.js"></script>