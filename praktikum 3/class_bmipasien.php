<?php
    class hasilBMI{
        private $beratBadan;
        private $tinggiBadan;
        function __construct($bb, $tb){
            $this->beratBadan = $bb;
            $this->tinggiBadan = $tb;
        }
        function getBMI(){
            return $this->beratBadan / ($this->tinggiBadan * $this->tinggiBadan);
        }
        function getStatus(){
            if ($this->getBMI() > 30){
                return "Anda mengalami obesitas";
            }
            if ($this->getBMI() > 24.9){
                return "Kelebihan berat badan";
            }
            elseif ($this->getBMI() > 18.5){
                return "Berat badan Anda ideal";
            }
            else{
                return "Berat badan Anda kurang";
            }
        }
    }   


?>