<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>PHP Web Page</title>
    <style>
        body{
            font-family: "Prompt", sans-serif;
            background: #f3f8ff;
            padding: 20px;
        }
        .card{
            background: white;
            padding: 20px;
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 0 10px #ccc;
            margin-bottom: 20px;
        }
        h2{
            color: #004aad;
        }
        pre{
            background: #222;
            color: #0f0;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<?php
// สร้างตัวแปร
$university = "มหาวิทยาลัยราชภัฏอุดรธานี";
$faculty = "คณะวิทยาศาสตร์";
$major = "สาขาเทคโนโลยีสารสนเทศ";
$name = "จิราพร แหล้มี";
$info = "นักศึกษาปี 2 ชอบด้าน AI และ Web Development";
?>

<div class="card">
    <h2>ข้อมูลนักศึกษา</h2>
    <p><strong>มหาวิทยาลัย:</strong> <?= $university ?></p>
    <p><strong>คณะ:</strong> <?= $faculty ?></p>
    <p><strong>สาขา:</strong> <?= $major ?></p>
    <p><strong>ชื่อ - นามสกุล:</strong> <?= $name ?></p>
    <p><strong>ข้อมูลแนะนำตัว:</strong> <?= $info ?></p>
</div>

<h2>ผลลัพธ์ของลูป</h2>
<pre>
<?php
//-------------------------------------------------------------
// 2) รูปแบบลูปตามโจทย์
//-------------------------------------------------------------

// 1) รูป *
// ใช้ for loop
echo "► ใช้ For Loop\n";
for($i=1; $i<=4; $i++){
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
    echo "\n";
}

// 2) 1111 / 2222 / 3333 
echo "\n► ใช้ While Loop\n";
$i = 1;
while($i <= 3){
    $j = 1;
    while($j <= 4){
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i++;
}

// 3) 1 / 22 / 333
echo "\n► ใช้ Do While Loop\n";
$i = 1;
do{
    $j = 1;
    while($j <= $i){
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i++;
}while($i <= 3);

// 4) กรอบสี่เหลี่ยม
echo "\n► ใช้ For Loop (วาดกรอบ)\n";
$rows = 5;
$cols = 6;

for($i=1; $i<=$rows; $i++){
    for($j=1; $j<=$cols; $j++){
        if($i==1 || $i==$rows || $j==1 || $j==$cols){
            echo "* ";
        }else{
            echo ($i-1)." ";
        }
    }
    echo "\n";
}


// 5) รูปกลับหัว 3 / 22 / 1
echo "\n► ใช้ While Loop (กลับหัว)\n";
$i = 3;
while($i >= 1){
    $j = 1;
    while($j <= $i){
        echo $i . " ";
        $j++;
    }
    echo "\n";
    $i--;
}
?>
</pre>

</body>
</html>
