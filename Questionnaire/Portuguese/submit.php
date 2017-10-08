<?

echo "<html>\n";
echo "<body>\n";
echo "Saving...\n";
echo "</body>\n";
echo "<script>\n";
echo "location.href='thanks.html';\n";
echo "</script>\n";
echo "</html>\n";

$f = fopen("answers.csv","a+");

fwrite($f,"datetime='".date("Y-m-d H:i:s")."'");
 
if ($_POST["E001"] != "") { fwrite($f,",E001='".$_POST["E001"]."'"); }
if ($_POST["E002"] != "") { fwrite($f,",E002='".$_POST["E002"]."'"); }
if ($_POST["E003"] != "") { fwrite($f,",E003='".$_POST["E003"]."'"); }
if ($_POST["E004"] != "") { fwrite($f,",E004='".$_POST["E004"]."'"); }
if ($_POST["E005"] != "") { fwrite($f,",E005='".$_POST["E005"]."'"); }
if ($_POST["E006"] != "") { fwrite($f,",E006='".$_POST["E006"]."'"); }
if ($_POST["E007"] != "") { fwrite($f,",E007='".$_POST["E007"]."'"); }
if ($_POST["E008"] != "") { fwrite($f,",E008='".$_POST["E008"]."'"); }
if ($_POST["E009"] != "") { fwrite($f,",E009='".$_POST["E009"]."'"); }
if ($_POST["E010"] != "") { fwrite($f,",E010='".$_POST["E010"]."'"); }
if ($_POST["E011"] != "") { fwrite($f,",E011='".$_POST["E011"]."'"); }
if ($_POST["E012"] != "") { fwrite($f,",E012='".$_POST["E012"]."'"); }
if ($_POST["E013"] != "") { fwrite($f,",E013='".$_POST["E013"]."'"); }
if ($_POST["E014"] != "") { fwrite($f,",E014='".$_POST["E014"]."'"); }
if ($_POST["E015"] != "") { fwrite($f,",E015='".$_POST["E015"]."'"); }
if ($_POST["E016"] != "") { fwrite($f,",E016='".$_POST["E016"]."'"); }
if ($_POST["E017"] != "") { fwrite($f,",E017='".$_POST["E017"]."'"); }
if ($_POST["E018"] != "") { fwrite($f,",E018='".$_POST["E018"]."'"); }
if ($_POST["E019"] != "") { fwrite($f,",E019='".$_POST["E019"]."'"); }
if ($_POST["E020"] != "") { fwrite($f,",E020='".$_POST["E020"]."'"); }
if ($_POST["E021"] != "") { fwrite($f,",E021='".$_POST["E021"]."'"); }
if ($_POST["E022"] != "") { fwrite($f,",E022='".$_POST["E022"]."'"); }
if ($_POST["E023"] != "") { fwrite($f,",E023='".$_POST["E023"]."'"); }
if ($_POST["E024"] != "") { fwrite($f,",E024='".$_POST["E024"]."'"); }
if ($_POST["E025"] != "") { fwrite($f,",E025='".$_POST["E025"]."'"); }
if ($_POST["E026"] != "") { fwrite($f,",E026='".$_POST["E026"]."'"); }
if ($_POST["E027"] != "") { fwrite($f,",E027='".$_POST["E027"]."'"); }
if ($_POST["E028"] != "") { fwrite($f,",E028='".$_POST["E028"]."'"); }
if ($_POST["E029"] != "") { fwrite($f,",E029='".$_POST["E029"]."'"); }
if ($_POST["E030"] != "") { fwrite($f,",E030='".$_POST["E030"]."'"); }
if ($_POST["E031"] != "") { fwrite($f,",E031='".$_POST["E031"]."'"); }
if ($_POST["E032"] != "") { fwrite($f,",E032='".$_POST["E032"]."'"); }
if ($_POST["E033"] != "") { fwrite($f,",E033='".$_POST["E033"]."'"); }
if ($_POST["E034"] != "") { fwrite($f,",E034='".$_POST["E034"]."'"); }
if ($_POST["E035"] != "") { fwrite($f,",E035='".$_POST["E035"]."'"); }
if ($_POST["E036"] != "") { fwrite($f,",E036='".$_POST["E036"]."'"); }
if ($_POST["E037"] != "") { fwrite($f,",E037='".$_POST["E037"]."'"); }
if ($_POST["E038"] != "") { fwrite($f,",E038='".$_POST["E038"]."'"); }
if ($_POST["E039"] != "") { fwrite($f,",E039='".$_POST["E039"]."'"); }
if ($_POST["E040"] != "") { fwrite($f,",E040='".$_POST["E040"]."'"); }
if ($_POST["E041"] != "") { fwrite($f,",E041='".$_POST["E041"]."'"); }
if ($_POST["E042"] != "") { fwrite($f,",E042='".$_POST["E042"]."'"); }
if ($_POST["E043"] != "") { fwrite($f,",E043='".$_POST["E043"]."'"); }
if ($_POST["E044"] != "") { fwrite($f,",E044='".$_POST["E044"]."'"); }
if ($_POST["E045"] != "") { fwrite($f,",E045='".$_POST["E045"]."'"); }
if ($_POST["E046"] != "") { fwrite($f,",E046='".$_POST["E046"]."'"); }
if ($_POST["E047"] != "") { fwrite($f,",E047='".$_POST["E047"]."'"); }
if ($_POST["E048"] != "") { fwrite($f,",E048='".$_POST["E048"]."'"); }
if ($_POST["E049"] != "") { fwrite($f,",E049='".$_POST["E049"]."'"); }
if ($_POST["E050"] != "") { fwrite($f,",E050='".$_POST["E050"]."'"); }
if ($_POST["E051"] != "") { fwrite($f,",E051='".$_POST["E051"]."'"); }
if ($_POST["E052"] != "") { fwrite($f,",E052='".$_POST["E052"]."'"); }
if ($_POST["E053"] != "") { fwrite($f,",E053='".$_POST["E053"]."'"); }
if ($_POST["E054"] != "") { fwrite($f,",E054='".$_POST["E054"]."'"); }
if ($_POST["E055"] != "") { fwrite($f,",E055='".$_POST["E055"]."'"); }
if ($_POST["E056"] != "") { fwrite($f,",E056='".$_POST["E056"]."'"); }
if ($_POST["E057"] != "") { fwrite($f,",E057='".$_POST["E057"]."'"); }
if ($_POST["E058"] != "") { fwrite($f,",E058='".$_POST["E058"]."'"); }
if ($_POST["E059"] != "") { fwrite($f,",E059='".$_POST["E059"]."'"); }
if ($_POST["E060"] != "") { fwrite($f,",E060='".$_POST["E060"]."'"); }
if ($_POST["E061"] != "") { fwrite($f,",E061='".$_POST["E061"]."'"); }
if ($_POST["E062"] != "") { fwrite($f,",E062='".$_POST["E062"]."'"); }
if ($_POST["E063"] != "") { fwrite($f,",E063='".$_POST["E063"]."'"); }
if ($_POST["E064"] != "") { fwrite($f,",E064='".$_POST["E064"]."'"); }
if ($_POST["E065"] != "") { fwrite($f,",E065='".$_POST["E065"]."'"); }
if ($_POST["E066"] != "") { fwrite($f,",E066='".$_POST["E066"]."'"); }
if ($_POST["E067"] != "") { fwrite($f,",E067='".$_POST["E067"]."'"); }
if ($_POST["E068"] != "") { fwrite($f,",E068='".$_POST["E068"]."'"); }
if ($_POST["E069"] != "") { fwrite($f,",E069='".$_POST["E069"]."'"); }
if ($_POST["E070"] != "") { fwrite($f,",E070='".$_POST["E070"]."'"); }
if ($_POST["E071"] != "") { fwrite($f,",E071='".$_POST["E071"]."'"); }
if ($_POST["E072"] != "") { fwrite($f,",E072='".$_POST["E072"]."'"); }
if ($_POST["E073"] != "") { fwrite($f,",E073='".$_POST["E073"]."'"); }
if ($_POST["E074"] != "") { fwrite($f,",E074='".$_POST["E074"]."'"); }
if ($_POST["E075"] != "") { fwrite($f,",E075='".$_POST["E075"]."'"); }
if ($_POST["E076"] != "") { fwrite($f,",E076='".$_POST["E076"]."'"); }
if ($_POST["E077"] != "") { fwrite($f,",E077='".$_POST["E077"]."'"); }
if ($_POST["E078"] != "") { fwrite($f,",E078='".$_POST["E078"]."'"); }
if ($_POST["E079"] != "") { fwrite($f,",E079='".$_POST["E079"]."'"); }
if ($_POST["E080"] != "") { fwrite($f,",E080='".$_POST["E080"]."'"); }
if ($_POST["E081"] != "") { fwrite($f,",E081='".$_POST["E081"]."'"); }
if ($_POST["E082"] != "") { fwrite($f,",E082='".$_POST["E082"]."'"); }
if ($_POST["E083"] != "") { fwrite($f,",E083='".$_POST["E083"]."'"); }
if ($_POST["E084"] != "") { fwrite($f,",E084='".$_POST["E084"]."'"); }
if ($_POST["E085"] != "") { fwrite($f,",E085='".$_POST["E085"]."'"); }
if ($_POST["E086"] != "") { fwrite($f,",E086='".$_POST["E086"]."'"); }
if ($_POST["E087"] != "") { fwrite($f,",E087='".$_POST["E087"]."'"); }
if ($_POST["E088"] != "") { fwrite($f,",E088='".$_POST["E088"]."'"); }
if ($_POST["E089"] != "") { fwrite($f,",E089='".$_POST["E089"]."'"); }
if ($_POST["E090"] != "") { fwrite($f,",E090='".$_POST["E090"]."'"); }
if ($_POST["E091"] != "") { fwrite($f,",E091='".$_POST["E091"]."'"); }
if ($_POST["E092"] != "") { fwrite($f,",E092='".$_POST["E092"]."'"); }
if ($_POST["E093"] != "") { fwrite($f,",E093='".$_POST["E093"]."'"); }
if ($_POST["E094"] != "") { fwrite($f,",E094='".$_POST["E094"]."'"); }
if ($_POST["E095"] != "") { fwrite($f,",E095='".$_POST["E095"]."'"); }
if ($_POST["E096"] != "") { fwrite($f,",E096='".$_POST["E096"]."'"); }
if ($_POST["E097"] != "") { fwrite($f,",E097='".$_POST["E097"]."'"); }
if ($_POST["E098"] != "") { fwrite($f,",E098='".$_POST["E098"]."'"); }
if ($_POST["E099"] != "") { fwrite($f,",E099='".$_POST["E099"]."'"); }
if ($_POST["E100"] != "") { fwrite($f,",E100='".$_POST["E100"]."'"); }
if ($_POST["E101"] != "") { fwrite($f,",E101='".$_POST["E101"]."'"); }
if ($_POST["E102"] != "") { fwrite($f,",E102='".$_POST["E102"]."'"); }
if ($_POST["E103"] != "") { fwrite($f,",E103='".$_POST["E103"]."'"); }
if ($_POST["E104"] != "") { fwrite($f,",E104='".$_POST["E104"]."'"); }
if ($_POST["E105"] != "") { fwrite($f,",E105='".$_POST["E105"]."'"); }
if ($_POST["E106"] != "") { fwrite($f,",E106='".$_POST["E106"]."'"); }
if ($_POST["E107"] != "") { fwrite($f,",E107='".$_POST["E107"]."'"); }
if ($_POST["E108"] != "") { fwrite($f,",E108='".$_POST["E108"]."'"); }
if ($_POST["E109"] != "") { fwrite($f,",E109='".$_POST["E109"]."'"); }
if ($_POST["E110"] != "") { fwrite($f,",E110='".$_POST["E110"]."'"); }
if ($_POST["E111"] != "") { fwrite($f,",E111='".$_POST["E111"]."'"); }
if ($_POST["E112"] != "") { fwrite($f,",E112='".$_POST["E112"]."'"); }
if ($_POST["E113"] != "") { fwrite($f,",E113='".$_POST["E113"]."'"); }
if ($_POST["E114"] != "") { fwrite($f,",E114='".$_POST["E114"]."'"); }
if ($_POST["E115"] != "") { fwrite($f,",E115='".$_POST["E115"]."'"); }
if ($_POST["E116"] != "") { fwrite($f,",E116='".$_POST["E116"]."'"); }
if ($_POST["E117"] != "") { fwrite($f,",E117='".$_POST["E117"]."'"); }
if ($_POST["E118"] != "") { fwrite($f,",E118='".$_POST["E118"]."'"); }
if ($_POST["E119"] != "") { fwrite($f,",E119='".$_POST["E119"]."'"); }
if ($_POST["E120"] != "") { fwrite($f,",E120='".$_POST["E120"]."'"); }
if ($_POST["E121"] != "") { fwrite($f,",E121='".$_POST["E121"]."'"); }
if ($_POST["E122"] != "") { fwrite($f,",E122='".$_POST["E122"]."'"); }
if ($_POST["E123"] != "") { fwrite($f,",E123='".$_POST["E123"]."'"); }
if ($_POST["E124"] != "") { fwrite($f,",E124='".$_POST["E124"]."'"); }
if ($_POST["E125"] != "") { fwrite($f,",E125='".$_POST["E125"]."'"); }

fwrite($f,"\n");

fclose($f);

?>

