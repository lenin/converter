<?php include "converter.php"; ?>
<html>
    <head>
        <title>Converter</title>
    </head>
<body>
    <h1>Converter</h1>
    <form method="post" action="">
        <p>
            <label>Convert</label>
            <input type="text" name="quantity" value="<?php echo $quantity; ?>">
        </p>
        <p>
            <label>From</label>
            <select name="from">
            <?php foreach ($units as $key => $unit) { ?>
                <option value="<?php echo $key; ?>"<?php if ($from == $key) echo " selected"; ?>><?php echo $unit; ?></option>
            <?php } ?>
            </select>
            <label>To<label>
            <select name="to">
            <?php foreach ($units as $key => $unit) { ?>
                <option value="<?php echo $key; ?>"<?php if ($to == $key) echo " selected"; ?>><?php echo $unit; ?></option>
            <?php } ?>
            </select>
        </p>
        <?php if ($result) { ?>
        <p><b>= <?php echo $result; ?></b></p>
        <?php } ?>
        <p><input type="submit" name="convert" value="Convert"></p>
    </form>
</body>
</html>
