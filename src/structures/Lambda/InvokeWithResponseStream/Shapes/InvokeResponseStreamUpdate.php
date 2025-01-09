<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Payload
 */
class InvokeResponseStreamUpdate extends Shape
{
    /**
     * @param array{Payload?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
