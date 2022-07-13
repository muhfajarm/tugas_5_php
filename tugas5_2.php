<?php

$input1_1 = "Ayo";
$input1_2 = "Bersama";
$input2_1 = "Belajar";
$input2_2 = "Niomic";
$gabungan = $input1_1 . " " . $input2_1 . " " . $input1_2 . " " . $input2_2;

echo '
	<h2>Operator String</h2>
	<table style="border: 1px solid black">
	<tr>
			<th style="border: 1px solid black">Input 1</th>
			<th style="border: 1px solid black">Input 2</th>
			<th style="border: 1px solid black">Hasil</th>
		</tr>
		<tr>
			<td style="border: 1px solid black">' . $input1_1 . '</td>
			<td style="border: 1px solid black">' . $input2_1 . '</td>
			<td style="border: 1px solid black">' . $input1_1 . ' ' . $input2_1 . '</td>
		</tr>
		<tr>
			<td style="border: 1px solid black">' . $input1_2 . '</td>
			<td style="border: 1px solid black">' . $input2_2 . '</td>
			<td style="border: 1px solid black">' . $input1_2 . ' ' . $input2_2 . '</td>
		</tr>
	</table>
	<p>Gabungan : ' . $gabungan . ' :)</p>
';
