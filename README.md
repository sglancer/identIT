Hello!
===========

This is a very little code that will allow you to ident code.

NOTE: The code needs to be without any tab.

Example:
-----------
	<?php
	if ($foo == $bar) {
	echo "Foo its equal to bar<br />";
	if ($foo = $baz) {
	echo "Foo its equal to baz";
	}
	}else{
	echo "Foo is not equal to bar";
	}
	?>

With this class, the code generated will be:
-----------
	<?php
	if ($foo == $bar) {
		echo "Foo its equal to bar<br />";
		if ($foo = $baz) {
			echo "Foo its equal to baz";
		}
	}else{
		echo "Foo is not equal to bar";
	}
	?>