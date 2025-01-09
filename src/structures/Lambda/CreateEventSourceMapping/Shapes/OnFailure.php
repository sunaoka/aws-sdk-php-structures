<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 */
class OnFailure extends Shape
{
    /**
     * @param array{Destination?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
