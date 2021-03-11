<?php

$file = strtolower(file_get_contents('/home/binarybottle/binarybottle.com/engram/data/training.1600000.processed.noemoticon_1st100000tweets.txt'));

//$file = strtolower(file_get_contents('/home/binarybottle/binarybottle.com/engram/data/gender-classifier-tweet-column.txt'));

// Workman key scores:
//   4 2 2 3  4   5  3 2 2 4
// 1.5 1 1 1  3   3  1 1 1 1.5
//   4 4 3 2  5   3  2 3 4 4

/* 1.  Norman: 7195727
 * 2.  Workman: 7246294
 * 3.  Halmak: 7454065
 * 4.  Engram: 7471491
 * 5.  Capewell: 7636852
 * 6.  Colemak: 7763694
 * 7.  Asset: 7836652
 * 8.  Minimak: 8109529
 * 9.  QGMLWY: 8125819
 * 10. Klausler: 8356311
 * 11. Dvorak: 8544264
 * 12. QWERTY: 12874165
*/

// Modified Workman key scores:
// 3.5 2 2 3  5   5  3 2 2 3.5  5
// 1.5 1 1 1  3   3  1 1 1 1.5  4
// 2.5 3 3 2  4   4  2 3 3 2.5

/* 1. Workman: 2281805
 * 2. Norman: 2282865
 * 3. Engram: 2405588
 * 4. QGMLWY: 2696813
 * 5. Halmak: 2704275
 * 6. Colemak: 2819233
 * 7. Dvorak: 3526327
 * 8. QWERTY: 6209212
 */

function get_points($layout = 'Engram') {

  switch ($layout) {
    case 'QWERTY':
      $points[1] = array('s', 'd', 'f', 'j', 'k', 'l');
      $points[1.5] = array('a', ';');
      $points[2] = array('w', 'e', 'i', 'o', 'v', 'm');
      $points[2.5] = array('z', '/');
      $points[3] = array('r', 'u', 'g', 'h', 'x', 'c', ',','.');
      $points[3.5] = array('q', 'p');
      $points[4] = array('b', 'n', "'");
      $points[5] = array('t', 'y','[');
      break;

    case 'Colemak':
      $points[1] = array('r', 's', 't', 'n', 'e', 'i');
      $points[1.5] = array('a', 'o');
      $points[2] = array('w', 'f', 'y', 'u', 'v', 'm');
      $points[2.5] = array('z', '/');
      $points[3] = array('p', 'l', 'd', 'h', 'x', 'c', ',', '.');
      $points[3.5] = array('q', ';');
      $points[4] = array('b', 'k', "'");
      $points[5] = array('g', 'j', '[');
      break;

    case 'Dvorak':
      $points[1] = array('e', 'o', 'u', 'h', 't', 'n');
      $points[1.5] = array('a', 's');
      $points[2] = array(',', '.', 'c', 'r', 'k', 'm');
      $points[2.5] = array(';', 'z');
      $points[3] = array('p', 'g', 'd', 'i', 'j', 'q', 'w', 'v');
      $points[3.5] = array("'", 'l');
      $points[4] = array("x", 'b', '-');
      $points[5] = array('y', 'f', '/');
      break;

    case 'QGMLWY':
      $points[1] = array('s', 't', 'n', 'a', 'e', 'o');
      $points[1.5] = array('d', 'h');
      $points[2] = array('g', 'm', 'u', 'b', 'v', 'p');
      $points[2.5] = array('z', '/');
      $points[3] = array('l', 'f', 'r', 'i', 'x', 'c', ',', '.');
      $points[3.5] = array("q", ';');
      $points[4] = array('j', 'k', "'");
      $points[5] = array('w', 'y', '[');
      break;

    case 'Workman':
      $points[1] = array('s', 'h', 't', 'n', 'e', 'o');
      $points[1.5] = array('a', 'i');
      $points[2] = array('d', 'r', 'c', 'u', 'p', 'l');
      $points[2.5] = array('z', '/');
      $points[3] = array('w', 'f', 'g', 'y', 'x', 'm', ',', '.');
      $points[3.5] = array("q", ';');
      $points[4] = array('v', 'k', "'");
      $points[5] = array('b', 'j', ';');
      break;

    case 'Norman':
      $points[1] = array('s', 'e', 't', 'n', 'i', 'o');
      $points[1.5] = array('a', 'h');
      $points[2] = array('w', 'd', 'r', 'l', 'v', 'm');
      $points[2.5] = array(';', 'z');
      $points[3] = array('f', 'g', 'y', 'u', 'x', 'c', ',', '.');
      $points[3.5] = array("q", ';');
      $points[4] = array('b', 'p', "'");
      $points[5] = array('k', 'j', '[');
      break;

    case 'Halmak':
      $points[1] = array('h', 'n', 't', 'a', 'e', 'o');
      $points[1.5] = array('s', 'i');
      $points[2] = array('l', 'r', 'c', 'u', 'd', 'p');
      $points[2.5] = array('f', 'y');
      $points[3] = array('b', 'q', ',', '.', 'm', 'v', 'x', 'k');
      $points[3.5] = array("w", 'j');
      $points[4] = array('/', 'g', "'");
      $points[5] = array('z', ';', '[');
      break;

    case 'Engram':
    default:
      $points[1] = array('o', 'e', 'a', 'r', 't', 's');
      $points[1.5] = array('i', 'n');
      $points[2] = array('g', 'u', 'c', 'l', 'd', 'h');
      $points[2.5] = array('v', 'm');
      $points[3] = array('k', 'b', ',', '.', 'z', 'x', 'w', 'p');
      $points[3.5] = array('y', 'f');
      $points[4] = array('(', ')', 'j');
      $points[5] = array("'", '"', q);
      break;

  }

  return $points;
}

$count = count_chars($file, 1);
$strlen = strlen($file);
arsort($count);


echo "Order of frequency:<br />\n";

foreach ($count as $i => $val) {
  echo chr($i);
}

echo "<br />\n";

foreach ($count as $i => $val) {
  echo chr($i) .": ". sprintf("%.1f", ($val/$strlen*100)) ."%<br />\n";
}

echo "<br />\n<br />\n";

// $layouts = array('QWERTY', 'Asset', 'Capewell', 'Colemak', 'Dvorak', 'Klausler', 'Minimak', 'QGMLWY', 'Workman', 'Norman', 'Halmak', 'Engram');

$layouts = array('QWERTY', 'Colemak', 'Dvorak', 'QGMLWY', 'Workman', 'Norman', 'Halmak', 'Engram');

foreach ($layouts as $layout) {

  $points_array = get_points($layout);
  $score = 0;

  foreach ($count as $i => $val) {
    $char = chr($i);
    foreach ($points_array as $points => $cap) {
      if (in_array(chr($i), $cap)) {
        $score = $score + ($points * $val);
        break;
      }
    }
  }
  echo "&nbsp;* $layout: $score<br />\n";
}

?>