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


    public function test()
    {
        return $this->dana;
    }
}
