<?php

$chargen = <<< EOF
!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefgh
"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghi
#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghij
$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijk
\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijkl
&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklm
'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmn
()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmno
)*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnop
*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopq
+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqr
,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrs
-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrst
./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstu
/0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuv
0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvw
123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwx
23456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxy
3456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz
456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{
56789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|
6789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}
789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~
89:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!
9:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"
:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#
;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$
<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\
=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&
>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'
?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'(
@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()
ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*
BCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+
CDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,
DEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-
EFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-.
FGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./
GHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0
HIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./01
IJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./012
JKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123
KLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./01234
LMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./012345
MNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456
NOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./01234567
OPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./012345678
PQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789
QRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:
RSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;
STUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<
TUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=
UVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>
VWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?
WXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@
XYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@A
YZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@AB
Z[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABC
[\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCD
\]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDE
]^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEF
^_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFG
_`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGH
`abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHI
abcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJ
bcdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJK
cdefghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKL
defghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLM
efghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMN
fghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNO
ghijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOP
hijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQ
ijklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQR
jklmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRS
klmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRST
lmnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTU
mnopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUV
nopqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVW
opqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWX
pqrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXY
qrstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ
rstuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[
stuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\
tuvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]
uvwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^
vwxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_
wxyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`
xyz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`a
yz{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`ab
z{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abc
{|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcd
|}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcde
}~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdef
~!"#$\&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefg

EOF;


/* since we're using usleep, this is equal to 0.05 secs */
$sleepy  = 1000000 * 0.05;

ob_start();

while (true) {
	for($i=0; $i<strlen($chargen); $i++) {
		echo $chargen[$i];
		ob_flush();
		usleep($sleepy);
	}
}


