<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionEventInvokeConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 */
class OnSuccess extends Shape
{
    /**
     * @param array{Destination?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
