<?php
        //Tao mang sinh vien
        $SinhVien = array(
            "SinhVien1" => array(
                "Name" => "Dũng",
                "Age" => 20,
                "Point" => 10
            ),
            "SinhVien2" => array(
                "Name" => "Báo",
                "Age" => 22,
                "Point" => 44
            ),
            "SinhVien3" => array(
                "Name" => "Hồng",
                "Age" => 21,
                "Point" => 29
            )
            );

            foreach ($SinhVien as $sv) {
                $name = $sv['Name'];
                $age = $sv['Age'];
                $point = $sv['Point'];
            
                if ($point < 4.0) {
                    echo "Student $name:<br>";
                    echo "Age: $age <br> ";
                    echo "Point: $point <br>";
                    echo " bạn đã Trượt <br/>";
                } else {
                    echo "Student $name:<br>";
                    echo "Age: $age <br> ";
                    echo "Point: $point <br>"; 
                    echo " bạn đã Đỗ<br/>";
                }
            }
        ?>