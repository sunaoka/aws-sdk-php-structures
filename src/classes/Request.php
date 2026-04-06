<?php

namespace Sunaoka\Aws\Structures;

class Request implements Arrayable
{
    use ArrayTrait;

    /**
     * @return void
     */
    public function __set(string $name, mixed $value)
    {
        $this->__data[$name] = $value;
    }
}
