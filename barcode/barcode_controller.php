
<?php
if (isset($_POST['generate_barcode'])) {
    $text = $_POST['barcode_text'];
// echo 'barcode.php?codetype=Code39&size=40&text="'.$text.'"&print=true';
    echo "<img alt='testing' src='barcode.php?codetype=Code39&size=40&text=$text&print=true'/>";
}
?>
<style>
    @media print{
        #printbutton{
            display: none;
        }
    }
</style>
<div id="printbutton"><button type="button" onclick="window.print()" value="Print" name="Print">Print Barcode</button> </div>