<html>
<head>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="./ckfinder/ckfinder.js"></script>
</head>
<body>
	<h1>Saludos desde mi computadora xD F.Victor</h1>
    <h1>CKEditor CKFinder Integration using PHP</h1>
    <p>
    <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
    </p>
 
<script type="text/javascript">
CKEDITOR.replace( 'editor1',
{
	filebrowserBrowseUrl : './ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl : './ckfinder/ckfinder.html?type=Images',
	filebrowserFlashBrowseUrl : './ckfinder/ckfinder.html?type=Flash',
	filebrowserUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	filebrowserFlashUploadUrl : './ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>
</body>
</html>