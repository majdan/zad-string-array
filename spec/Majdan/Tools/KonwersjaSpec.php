<?php

namespace spec\Majdan\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KonwersjaSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Majdan\Tools\Konwersja');
    }

    function it_should_have_setter_and_gettter()
    {
        $this->setDana(999999999999)->getDana()->shouldReturn(999999999999);
        $this->setJednostka1("lorem")->getJednostka1()->shouldReturn("lorem");    
        $this->setJednostka2("lore")->getJednostka2()->shouldReturn("lore");  
    }

    function it_should_conv()
	{
  	  $this->setDana(1)
  	  	   ->setJednostka1("kB")
  	  	   ->setJednostka2("B")
  	  	   ->conv()
  	  	   ->shouldReturn(1024);
	}
}
