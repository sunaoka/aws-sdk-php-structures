<?php

namespace Sunaoka\Aws\Structures\Lambda\ListEventSourceMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 */
class OnFailure extends Shape
{
    /**
     * @param array{Destination?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
