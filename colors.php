<?php

$s1  = '003000';
$s2  = 'ff30ff';
$sum = dechex(hexdec($s1)+hexdec($s2));

?>
<style>
.s1 {
    <?php echo "fill:#$s1"; ?>
}
.s2 {
    <?php echo "fill:#$s2"; ?>
}
body {
    <?php echo "background-color:#$sum"; ?>
}
</style>

<svg width="400" height="100">
  <rect class="s1" width="400" height="100" />
</svg>
<svg width="400" height="100">
  <rect class="s2" width="400" height="100" />
</svg>
