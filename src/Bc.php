<?php

namespace Huid\Bc;

class Bc
{
    protected $final = 0;

    public function __construct(string $operand, int $scale = 0)
    {
        bcscale($scale);
        $this->_final = $operand;
    }

    public function add(string $operand)
    {
        $this->_final = bcadd($this->_final, $operand);
        return $this;
    }


    public function sub(string $operand)
    {
        $this->_final = bcsub($this->_final, $operand);
        return $this;
    }


    public function value()
    {
        return $this->_final;
    }
}

