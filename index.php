<?php
	if(isset($_FILES['image-file'])){
		list($imagewidth, $imageheight, $imageType) = getimagesize($_FILES['image-file']['tmp_name']);
		$imageType = image_type_to_mime_type($imageType);
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote {
    margin: 0;
    padding: 0;
}
body {
    font-family: "Helvetica Neue", Helvetica, "Hiragino Sans GB", Arial, sans-serif;
    font-size: 13px;
    line-height: 18px;
    color: #737373;
    margin: 10px 10px 10px 20px;
}
a {
    color: #0069d6;
}
a:hover {
    color: #0050a3;
    text-decoration: none;
}
a img {
    border: none;
}
p {
    margin-bottom: 9px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    color: #404040;
    line-height: 36px;
}
h1 {
    margin-bottom: 18px;
    font-size: 30px;
}
h2 {
    font-size: 24px;
}
h3 {
    font-size: 18px;
}
h4 {
    font-size: 16px;
}
h5 {
    font-size: 14px;
}
h6 {
    font-size: 13px;
}
hr {
    margin: 0 0 19px;
    border: 0;
    border-bottom: 1px solid #aaa;
}
blockquote {
    padding: 13px 13px 21px 15px;
    margin-bottom: 18px;
    font-family:georgia,serif;
    font-style: italic;
}
blockquote:before {
    content:"\201C";
    font-size:40px;
    margin-left:-10px;
    font-family:georgia,serif;
    color:#eee;
}
blockquote p {
    font-size: 14px;
    font-weight: 300;
    line-height: 18px;
    margin-bottom: 0;
    font-style: italic;
}
code, pre {
    padding: 0 3px 2px;
    font-family: Monaco, Andale Mono, Courier New, monospace;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
code {
    background-color: #fee9cc;
    color: rgba(0, 0, 0, 0.75);
    padding: 1px 3px;
    font-size: 12px;
}
pre {
    display: block;
    padding: 14px;
    margin: 0 0 18px;
    line-height: 16px;
    font-size: 11px;
    border: 1px dashed #ccc;
    border: 1px dashed rgba(0, 0, 0, 0.15);
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word;
}
pre code {
    background-color: #fdfdfd;
    color:#737373;
    font-size: 11px;
}
@media screen and (min-width: 768px) {
    body {
        width: 748px;
        margin:10px auto;
    }
}
</style>
<title>check.html</title>
</head>
<body>
<h1>Check Image Content-type</h1>

<hr />

<p><form method='post' enctype="multipart/form-data"></p>

<div>
<input type='file' name ='image-file'/>
<input type='submit'/>
</div>


<p></form></p>

<hr />
<?php if(isset($imageType)):?>
Your image's content-type is: 
<b><?php
	print_r($imageType);
?></b>
<?php endif;?>
</body>
</html>