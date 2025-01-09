<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionEventInvokeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 */
class OnSuccess extends Shape
{
    /**
     * @param array{Destination?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
