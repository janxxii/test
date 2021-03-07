<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>

        <style>
            @charset "UTF-8";
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

            body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 300;
            line-height: 1.42em;
            color:#A7A1AE;
            background-color:#1F2739;
            }

            h1 {
            font-size:3em; 
            font-weight: 300;
            line-height:1em;
            text-align: center;
            color: #4DC3FA;
            }

            h2 {
            font-size:1em; 
            font-weight: 300;
            text-align: center;
            display: block;
            line-height:1em;
            padding-bottom: 2em;
            color: #FB667A;
            }

            h2 a {
            font-weight: 700;
            text-transform: uppercase;
            color: #FB667A;
            text-decoration: none;
            }

            .blue { color: #185875; }
            .yellow { color: #FFF842; }

            .container th h1 {
                font-weight: bold;
                font-size: 1em;
            text-align: left;
            color: #185875;
            }

            .container td {
                font-weight: normal;
                font-size: 1em;
            -webkit-box-shadow: 0 2px 2px -2px #0E1119;
                -moz-box-shadow: 0 2px 2px -2px #0E1119;
                        box-shadow: 0 2px 2px -2px #0E1119;
            }

            .container {
                text-align: left;
                overflow: hidden;
                width: 80%;
                margin: 0 auto;
            display: table;
            padding: 0 0 8em 0;
            }

            .container td, .container th {
                padding-bottom: 2%;
                padding-top: 2%;
            padding-left:2%;  
            }

            /* Background-color of the odd rows */
            .container tr:nth-child(odd) {
                background-color: #323C50;
            }

            /* Background-color of the even rows */
            .container tr:nth-child(even) {
                background-color: #2C3446;
            }

            .container th {
                background-color: #1F2739;
            }

            .container td:first-child { color: #FB667A; }

            .container tr:hover {
            background-color: #464A52;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
                -moz-box-shadow: 0 6px 6px -6px #0E1119;
                        box-shadow: 0 6px 6px -6px #0E1119;
            }

            .container td:hover {
            background-color: #FFF842;
            color: #403E10;
            font-weight: bold;
            
            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);
            
            transition-delay: 0s;
                transition-duration: 0.4s;
                transition-property: all;
            transition-timing-function: line;
            }

            @media (max-width: 800px) {
            .container td:nth-child(4),
            .container th:nth-child(4) { display: none; }
            }
        </style>

    </head>
    <body>
        <?php
            $cuahang = $_GET["ch"];
            $xang_95 = $_GET["x95"];
            $xang_E5 = $_GET["xE5"];
            $xang_DO = $_GET["xDO"];
            $xang_DOCC = $_GET["xDOCC"];

            $sum = $xang_95 + $xang_E5 + $xang_DO + $xang_DOCC;

            echo "<h2> Tổng số xăng: $sum </h2>";

            //Ham in result Diem Giao Hang
            function diemGiaoHang($x95, $xe5, $xdo, $xdocc) {
                $sum_x = $x95 + $xe5 + $xdo + $xdocc;
                if ($x95 != 0)
                    echo "$x95 (95) ";
                if ($xe5 != 0){
                    if($x95 != 0)
                        echo "+ $xe5 (E5) ";
                    else
                        echo "$xe5 (E5) ";
                }  
                if ($xdo != 0){
                    if($xe5 != 0)
                        echo "+ $xdo (Do) ";
                    else if($xe5 == 0 && $x95 != 0)
                        echo "+ $xdo (Do) ";
                    else
                        echo "$xdo (Do) ";
                }
                if ($xdocc != 0){
                    if($xdo != 0)
                        echo "+ $xdocc (Docc)";
                    else if ($xdo == 0 && $xe5 != 0)
                        echo "+ $xdocc (Docc)";
                    else if ($xdo == 0 && $xe5 == 0 && $x95 != 0)
                        echo "+ $xdocc (Docc)";
                    else
                        echo "$xdocc (Docc)";
                    }
            }

            //Dung tich 5
            if ($sum <= 5){
                echo "<table class='container'>
                <thead>
                    <tr>
                        <th><h1 style='color: #fff'>XE SỐ </h1></th>
                        <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                        <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                        <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                        <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 65C-133.41 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Phạm Thanh Huy </td>
                        <td> 5 </td>
                        <td> 2 - 1 - 2 </td>
                    </tr>
                    <tr>
                        <td> 65C-131.56 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Phan Thành Thắng </td>
                        <td> 5 </td>
                        <td> 2 - 1 - 2 </td>
                    </tr>
    
                </tbody>
                </table>";
            }



            //Dung tich 10
            else if ($sum > 5 && $sum <= 10){
                echo "<table class='container'>
                <thead>
                    <tr>
                        <th><h1 style='color: #fff'>XE SỐ </h1></th>
                        <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                        <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                        <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                        <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 65C-130.46 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Nguyễn Thành Hoàng </td>
                        <td> 10 </td>
                        <td> 3 - 5 - 2 </td>
                    </tr>
                    <tr>
                        <td> 65C-126.75 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Huỳnh Nhựt Trường </td>
                        <td> 10 </td>
                        <td> 3 - 2 - 5 </td>
                    </tr>
                    <tr>
                        <td> 65C-031.26 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Lê Hoàng Dũng </td>
                        <td> 10 </td>
                        <td> 3 - 5 - 2 </td>
                    </tr>
                    <tr>
                        <td> 64C-036.68 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Huỳnh Văn Út </td>
                        <td> 11 </td>
                        <td> 3 - 2 - 4 - 2 </td>
                    </tr>
                    <tr>
                        <td> 65C-006.19 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Trần Hoàng Phong </td>
                        <td> 12 </td>
                        <td> 5 - 2 - 3 - 2 </td>
                    </tr>
    
                </tbody>
                </table>";
            }



            //Dung tich 11
            else if ($sum == 11){
                echo "<table class='container'>
                <thead>
                    <tr>
                    <th><h1 style='color: #fff'>XE SỐ </h1></th>
                    <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                    <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                    <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                    <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 64C-036.68 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Huỳnh Văn Út </td>
                        <td> 11 </td>
                        <td> 3 - 2 - 4 - 2 </td>
                    </tr>
                </tbody>
                </table>";
            }


            //Dung tich 12
            else if ($sum == 12){
                echo "<table class='container'>
                <thead>
                    <tr>
                    <th><h1 style='color: #fff'>XE SỐ </h1></th>
                    <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                    <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                    <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                    <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 65C-006.19 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Trần Hoàng Phong </td>
                        <td> 12 </td>
                        <td> 5 - 2 - 3 - 2 </td>
                    </tr>
                </tbody>
                </table>";
            }



            //Dung tich 14
            else if ($sum > 10 && $sum <= 14){
                echo "<table class='container'>
                    <thead>
                        <tr>
                            <th><h1 style='color: #fff'>XE SỐ </h1></th>
                            <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                            <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                            <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                            <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 65C-130.28 </td>
                            <td> $cuahang = ";
                            diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                            echo "</td>
                            <td> Huỳnh Minh Hoàng </td>
                            <td> 14 </td>
                            <td> 4 - 5 - 2 - 3 </td>
                        </tr>
                        <tr>
                            <td> 65C-127.33 </td>
                            <td> $cuahang = ";
                            diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                            echo "</td>
                            <td> Lê Kim Duy </td>
                            <td> 14 </td>
                            <td> 4 - 2 - 8 </td>
                        </tr>
                
                    </tbody>
                </table>";
            }



            //Dung tich 16
            else if ($sum == 15 || $sum == 16){
                echo "<table class='container'>
                <thead>
                    <tr>
                    <th><h1 style='color: #fff'>XE SỐ </h1></th>
                    <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                    <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                    <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                    <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                </thead>
                <tbody>
                    <tr>
                        <td> 65C-130.47 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Võ Hoàng Huynh </td>
                        <td> 16 </td>
                        <td> 5 - 5 - 2 - 4 </td>
                    </tr>
                </tbody>
                </table>";
            }



            //Dung tich 20
            else if ($sum > 16 && $sum <= 20){
                echo "<table class='container'>
                <thead>
                    <tr>
                        <th><h1 style='color: #fff'>XE SỐ </h1></th>
                        <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                        <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                        <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                        <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 65H-004.94 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Huỳnh Đức Thắng </td>
                        <td> 20 </td>
                        <td> 3 - 3 - 4 - 5 - 5 </td>
                    </tr>
                    <tr>
                        <td> 64C-073.25 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Lê Thanh Lộc </td>
                        <td> 20 </td>
                        <td> 5 - 3 - 2 - 6 - 4 </td>
                    </tr>
    
                </tbody>
                </table>";
            }
            
            
            //Dung tich 21
            else if($sum == 21){
                echo "<table class='container'>
                <thead>
                    <tr>
                    <th><h1 style='color: #fff'>XE SỐ </h1></th>
                    <th><h1 style='color: #fff'>ĐIỂM GIAO HÀNG</h1></th>
                    <th><h1 style='color: #fff'>TÊN TÀI XẾ</h1></th>
                    <th><h1 style='color: #fff'>DUNG TÍCH XE</h1></th>
                    <th><h1 style='color: #fff'>HẦM HÀNG</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 65C-072.94 </td>
                        <td> $cuahang = ";
                        diemGiaoHang($xang_95, $xang_E5, $xang_DO, $xang_DOCC);
                        echo "</td>
                        <td> Nguyễn Thanh Thái </td>
                        <td> 21 </td>
                        <td> 6 - 5 - 4 - 3 - 3 </td>
                    </tr>
                </tbody>
                </table>";
            }
            

            else{ ?>
                <script type="text/javascript">
                    var sum_x = "<?php echo $sum; ?>";
                    alert("Tổng số xăng là " + sum_x + ". Chương trình không thể xử lý !")
                </script>
        <?php
            }
        ?>
        <a href="input.html" style="text-decoration: none; padding: 10px; font-size: 16px; background: #fff; color: #000; margin-left: 1000px; margin-top: 100px;">  QUAY VỀ </a>
    </body>
</html>


