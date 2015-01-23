<?php
?>
<!-- データのエンコード方式である enctype は、必ず以下のようにしなければなりません -->
<form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- MAX_FILE_SIZE は、必ず "file" input フィールドより前になければなりません -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- input 要素の name 属性の値が、$_FILES 配列のキーになります -->
    このファイルをアップロード: <input name="userfile" type="file" />
    <input type="submit" value="ファイルを送信" />
</form>