<?php
$File = 'visitor_count.txt';

if (!file_exists($File)) {
    file_put_contents($File, '0');
}
$visitorCount = (int)file_get_contents($File);
$visitorCount++;
file_put_contents($File, $visitorCount);

echo $visitorCount;
?>
