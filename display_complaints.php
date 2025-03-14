<?php
$file = 'complaints.txt';
if (file_exists($file)) {
    $complaints = file_get_contents($file);
    echo "<pre>$complaints</pre>";
} else {
    echo "No complaints yet.";
}
?>