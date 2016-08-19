<?php

namespace Hoa\Heap\Test\Unit;

use Hoa\Heap as LUT; //Library Under Test
use Hoa\Heap\Max as SUT; //System Under Test
use Hoa\Test;

class Max extends Test\Unit\Suite
{
    public function case_construct()
    {
        $this
            ->exception(function () {
                new SUT(null);
            })
            ->hasMessage('Storage type given is not supported')
            ->isInstanceOf(LUT\Exception::class)
        ;

        $this
            ->given(
                $max = new SUT(SUT::VALUE_TYPE_MIXED)
            )
            ->then
                ->object($max)
                    ->isInstanceOf(SUT::class)
        ;
    }
    
    public function case_insert_scalar()
    {
        $this
            ->given(
                $max = new SUT(SUT::VALUE_TYPE_MIXED),
                $concatKeys   = '',
                $concatValues = ''
            )
            ->when(
                $four  = $max->insert('4', 79),
                $three = $max->insert('3', 80),
                $six   = $max->insert('6'),
                $two   = $max->insert('2', 85),
                $one   = $max->insert('1', 90),
                $five  = $max->insert('5', 1)
            )
        ;

        foreach ($max as $key => $element) {

            $concatKeys .= $key;
            $concatValues .= $element;
        }

        $this
            ->then
                ->string($concatKeys)
                    ->isIdenticalTo($one . $two . $three . $four . $five . $six)

                ->string($concatValues)
                    ->isIdenticalTo('123456')
        ;
    }

    public function case_insert_callable()
    {
    }

    public function case_detach()
    {
    }

    public function case_extract()
    {
    }

    public function case_top()
    {
    }

    public function case_pop()
    {
    }

    public function case_end()
    {
    }

    public function case_priority()
    {
    }

    public function case_current()
    {
    }

    public function case_key()
    {
    }

    public function case_next()
    {
    }

    public function case_rewind()
    {
    }

    public function case_valid()
    {
    }

    public function case_count()
    {
    }
}
