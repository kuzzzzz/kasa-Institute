<!-- Read and entire -->

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,  filesize("webdictionary.txt"));

fclose($myfile);
?>


<!-- Read a single line from a file -->

<h1>
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
echo fgets($myfile);
fclose($myfile);
?>
</h1>

<!-- Read an entire file line by line -->
<h5>

    <?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>" ;
}
fclose($myfile);
?>
</h5>

<!-- Reads single character -->

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file

echo fgetc($myfile);
echo fgetc($myfile);
echo fgetc($myfile);
fclose($myfile);
?>