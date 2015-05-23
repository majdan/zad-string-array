<?php

namespace Majdan\Tools;

class Konwersja
{

    private $dana;
    private $jednostka1;
    private $jednostka2;

    public function setDana($dana)
    {
        $this->dana = $dana;

        return $this;
    }

	public function getDana()
    {
        return $this->dana;
    }

   public function setJednostka1($jednostka1)
    {
        $this->jednostka1 = $jednostka1;

        return $this;
    }

	public function getJednostka1()
    {
        return $this->jednostka1;
    }

    public function setJednostka2($jednostka2)
    {
        $this->jednostka2 = $jednostka2;

        return $this;
    }

	public function getJednostka2()
    {
        return $this->jednostka2;
    }


    public function conv()
    {
    	if($this->jednostka1=="B" && $this->jednostka2=="kB")	
    		return $this->dana /1024;
    	elseif($this->jednostka1=="B" && $this->jednostka2=="B")	
    		return $this->dana;
    	elseif($this->jednostka1=="B" && $this->jednostka2=="MB")	
    		return $this->dana/(1024*1024);
    	elseif($this->jednostka1=="B" && $this->jednostka2=="GB")	
    		return $this->dana/(1024*1024*1024);
    	elseif($this->jednostka1=="B" && $this->jednostka2=="TB")	
    		return $this->dana/(1024*1024*1024*1024);
    	elseif($this->jednostka1=="kB" && $this->jednostka2=="B")	
    		return $this->dana*1024;
    	elseif($this->jednostka1=="kB" && $this->jednostka2=="kB")	
    		return $this->dana;
    	elseif($this->jednostka1=="kB" && $this->jednostka2=="MB")	
    		return $this->dana/1024;
    	elseif($this->jednostka1=="kB" && $this->jednostka2=="GB")	
    		return $this->dana/(1024*1024);
    	elseif($this->jednostka1=="kB" && $this->jednostka2=="TB")	
    		return $this->dana/(1024*1024*1024);
    	elseif($this->jednostka1=="MB" && $this->jednostka2=="B")	
    		return $this->dana*(1024*1024);
    	elseif($this->jednostka1=="MB" && $this->jednostka2=="kB")	
    		return $this->dana*1024;
    	elseif($this->jednostka1=="MB" && $this->jednostka2=="GB")	
    		return $this->dana/1024;
    	elseif($this->jednostka1=="MB" && $this->jednostka2=="TB")	
    		return $this->dana/(1024*1024);
    	elseif($this->jednostka1=="MB" && $this->jednostka2=="MB")	
    		return $this->dana;
    	elseif($this->jednostka1=="GB" && $this->jednostka2=="B")	
    		return $this->dana*(1024*1024*1024);
    	elseif($this->jednostka1=="GB" && $this->jednostka2=="kB")	
    		return $this->dana*(1024*1024);
    	elseif($this->jednostka1=="GB" && $this->jednostka2=="MB")	
    		return $this->dana*1024;
    	elseif($this->jednostka1=="GB" && $this->jednostka2=="TB")	
    		return $this->dana/1024;
    	elseif($this->jednostka1=="GB" && $this->jednostka2=="GB")	
    		return $this->dana;
    	elseif($this->jednostka1=="TB" && $this->jednostka2=="B")	
    		return $this->dana*(1024*1024*1024*1024);
    	elseif($this->jednostka1=="TB" && $this->jednostka2=="kB")	
    		return $this->dana*(1024*1024*1024);
    	elseif($this->jednostka1=="TB" && $this->jednostka2=="MB")	
    		return $this->dana*(1024*1024);
    	elseif($this->jednostka1=="TB" && $this->jednostka2=="GB")	
    		return $this->dana*1024;
    	elseif($this->jednostka1=="TB" && $this->jednostka2=="TB")	
    		return $this->dana;
    	else{
    		$this->jednostka="nieobslugiwane jednostki";
    	}
    }
}
