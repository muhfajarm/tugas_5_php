<?php

echo '
	<h2>Tabel Logika 1111</h2>
	<table style="border: 1px solid black">
	<tr>
			<th style="border: 1px solid black">Input true</th>
			<th style="border: 1px solid black">Input 2</th>
			<th style="border: 1px solid black">AND</th>
			<th style="border: 1px solid black">OR</th>
		</tr>
		<tr>
			<td style="border: 1px solid black">false</td>
			<td style="border: 1px solid black">false</td>
			<td style="border: 1px solid black">' . printf(false && false) . '</td>
			<td style="border: 1px solid black">' . printf(false || false) . '</td>
		</tr>
		<tr>
			<td style="border: 1px solid black">false</td>
			<td style="border: 1px solid black">true</td>
			<td style="border: 1px solid black">' . printf(false && true) . '</td>
			<td style="border: 1px solid black">' . printf(false || true) . '</td>
		</tr>
		<tr>
			<td style="border: 1px solid black">true</td>
			<td style="border: 1px solid black">false</td>
			<td style="border: 1px solid black">' . printf(true && false) . '</td>
			<td style="border: 1px solid black">' . printf(true || false) . '</td>
		</tr>
		<tr>
			<td style="border: 1px solid black">true</td>
			<td style="border: 1px solid black">true</td>
			<td style="border: 1px solid black">' . printf(true && true) . '</td>
			<td style="border: 1px solid black">' . printf(true || true) . '</td>
		</tr>
	</table>';
