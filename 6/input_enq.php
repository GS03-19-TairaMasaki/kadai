<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<form action="comfirm_enq.php" method="post">
    名前：<input type="text" name="name"><br>
    年齢：<input type="text" name="age"><br>
    性別：
    <label>
        <input type="radio" name="sex" value="male">男
    </label>
    <label>
        <input type="radio" name="sex" value="female">女
    </label><br>
    E-mail：<input type="text" name="e-mail"><br>
    趣味：
    <label>
        <input type="checkbox" name="hobby" value="ドライブ">ドライブ
    </label>
    
    <label>
        <input type="checkbox" name="hobby" value="スイミング">スイミング
    </label>
    
    <label>
        <input type="checkbox" name="hobby" value="ランニング">ランニング
    </label>
    
    <label>
        <input type="checkbox" name="hobby" value="ショッピング">ショッピング
    </label>
    
    <input type="submit" name="submit" value="送信する">
    
</form>





</body>
</html>