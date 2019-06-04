Problem

You have an array and you need to remove anything that is not a number and  double everything else.

Solution

$a = kdaviesnz/utilities/lists([null, "apple", 1,2,3]);

$result = $a->filter(function($item) {
   return is_numeric($item)
}
)->map(function($item) {
   return $item * 2
}
)()

$a_parsed = $result()


See tests/listsTest.php


# lists
