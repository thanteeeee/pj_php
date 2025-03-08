<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $room = $_POST['room'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $repair_items = $_POST['repair_items'] ?? [];
    $other_item = $_POST['other_item'] ?? '';
    $description = $_POST['description'] ?? '';
    $permission = $_POST['permission'] ?? '';
    $appointment_details = $_POST['appointment_details'] ?? '';
    
    echo "<h2>ข้อมูลที่ส่งมา:</h2>";
    echo "ชื่อ: $name $surname <br>";
    echo "ห้องพัก: $room <br>";
    echo "โทรศัพท์: $phone <br>";
    echo "รายการที่ประสงค์ให้ซ่อม: " . implode(', ', $repair_items) . "<br>";
    if (!empty($other_item)) {
        echo "รายการอื่นๆ: $other_item <br>";
    }
    echo "รายละเอียด: $description <br>";
    echo "การอนุญาตเข้าซ่อม: $permission <br>";
    echo "รายละเอียดการนัดซ่อม: $appointment_details <br>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งซ่อมออนไลน์</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8dcc6;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #ff7f50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #ff5722;
        }
    </style>
</head>
<body>
    <h2>แจ้งซ่อมออนไลน์</h2>
    <form method="POST">
        <label>ชื่อ:</label>
        <input type="text" name="name" required>
        
        <label>นามสกุล:</label>
        <input type="text" name="surname" required>
        
        <label>ห้องพัก / สถานที่ / อาคาร:</label>
        <input type="text" name="room" required>
        
        <label>หมายเลขโทรศัพท์:</label>
        <input type="text" name="phone" required>
        
        <label>รายการที่ประสงค์ให้ซ่อม:</label><br>
        <input type="checkbox" name="repair_items[]" value="เครื่องปรับอากาศ"> เครื่องปรับอากาศ<br>
        <input type="checkbox" name="repair_items[]" value="พัดลม"> พัดลม<br>
        <input type="checkbox" name="repair_items[]" value="ตู้เย็น"> ตู้เย็น<br>
        <input type="checkbox" name="repair_items[]" value="เครื่องทำน้ำอุ่น"> เครื่องทำน้ำอุ่น<br>
        <input type="checkbox" name="repair_items[]" value="ไฟฟ้า"> ไฟฟ้า<br>
        <input type="checkbox" name="repair_items[]" value="อื่นๆ"> อื่นๆ <input type="text" name="other_item" placeholder="โปรดระบุ"><br>
        
        <label>อธิบายลักษณะการชำรุด:</label>
        <textarea name="description" required></textarea>
        
        <label>การอนุญาตเข้าซ่อม:</label>
        <select name="permission">
            <option value="เข้าซ่อมได้ตลอดเวลา">เข้าซ่อมได้ตลอดเวลา</option>
            <option value="ต้องโทรแจ้งก่อนเข้าซ่อม">ต้องโทรแจ้งก่อนเข้าซ่อม</option>
        </select>
        
        <label>รายละเอียดการนัดซ่อม:</label>
        <textarea name="appointment_details" required></textarea>
        
        <button type="submit">แจ้งซ่อม</button>
    </form>
</body>
</html>
