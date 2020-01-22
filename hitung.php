<?php 
/**
 * 
 */
class ideal{

	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo "BMI : ".$bmi."<br>"."Status : "." Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo "BMI : ".$bmi."<br>"."Status : "."Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "BMI : ".$bmi."<br>"."Status : "." Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "BMI : ".$bmi."<br>"."Status :"."Obesitas";
			}
		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo "BMI : ".$bmi."<br>"."Status : "." Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo "BMI : ".$bmi."<br>"."Status : "."Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "BMI : ".$bmi."<br>"."Status : "." Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "BMI : ".$bmi."<br>"."Status : "." Over Weight/Kegemukan";;
			}
		}
	}

}
$hitung = new ideal(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$hitung->hitung($bmi, $jk);
}
 ?>