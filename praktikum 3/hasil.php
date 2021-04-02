<?php
          
          require_once "class_bmipasien.php";

          $nama = $_POST['nama'];
          $beratBadan = $_POST['beratBadan'];
          $tinggiBadan = $_POST['tinggiBadan'];
          $umur = $_POST['umur'];
          $gender = $_POST['gender'];

          $bmi = new hasilBMI($beratBadan, $tinggiBadan/100 );

          echo "<tr><td>Nama </td>";
          echo "<td> : ".$nama."</td></td>";
          echo "<br><tr><td>Berat/Tinggi Badan </td>";
          echo "<td> : ".$beratBadan."/".$tinggiBadan."</td></tr>";
          echo "<br><tr><td>Umur </td>";
          echo "<td> : ".$umur."</td></tr>";
          echo "<br><tr><td>Jenis Kelamin </td>";
          echo "<td> : ".$gender."</td></tr>";
          echo "<br><tr><td>BMI</td>";
          echo "<td> : ".$bmi->getBMI()."</td></tr>";
          echo "<br><tr><td>Hasil </td>";
          echo "<td> : ".$bmi->getStatus()."</td></tr>";


          ?>
          