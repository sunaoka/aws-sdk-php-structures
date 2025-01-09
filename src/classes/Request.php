<?php

namespace Sunaoka\Aws\Structures;

class Request implements Arrayable
{
    use ArrayTrait;

    /**
     * @param string $name
     * @param scalar $value
     *
     * @return void
     */
    public function __set($name, $value)
    {
        $this->__data[$name] = $value;
    }
}
