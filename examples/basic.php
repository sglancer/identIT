<?php
// Require the class
require '../includes/identit.class.php';

// Set a main text
$text = '
<?php
if ($foo == $bar) {
echo "Foo its equal to bar<br />";
if ($foo = $baz) {
echo "Foo its equal to baz";
}
}else{
echo "Foo is not equal to bar";
}
?>';

$bar = new identIT();
echo '<pre>'.$bar->ident($text, true).'</pre>';