<?php
class Foo {}

$storageA = new \SplObjectStorage();
$storageA->attach(new \Foo);
$storageA->attach(new \Foo);

echo ("Count storage A: " . count($storageA));
foreach ($storageA as $object) {
        echo ' x ';
}

echo "\n";
$storageB = clone $storageA;

echo ("Count storage B: " . count($storageB));
foreach ($storageB as $object) {
        echo ' x ';
}
echo "\n";
?>
===DONE===
<?php exit(0); ?>