<?
echo "<html>\n";
echo "<body>\n";
echo "...\n";
echo "</body>\n";
echo "<script>\n";
if ($_POST["day"] == "A") { echo "location.href='./formA/';\n"; }
if ($_POST["day"] == "B") { echo "location.href='./formB/';\n"; }
if ($_POST["day"] == "C") { echo "location.href='./formC/';\n"; }
if ($_POST["day"] == "D") { echo "location.href='./formD/';\n"; }
if ($_POST["day"] == "E") { echo "location.href='./formE/';\n"; }
echo "</script>\n";
echo "</html>\n";
?>
