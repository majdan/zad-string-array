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
        $this->setDana(123)->getDana()->shouldReturn(123);
        $this->setJednostka1("lorem")->getJednostka1()->shouldReturn("lorem");    
        $this->setJednostka2("lore")->getJednostka2()->shouldReturn("lore");  
    }

    function it_should_test()
	{
  	  $this->setDana(5)->test()->shouldReturn(5);
	}
}
