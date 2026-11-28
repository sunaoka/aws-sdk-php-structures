<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<4, 8>|null $minMemory
 */
class GraphSessionConfiguration extends Shape
{
    /**
     * @param array{minMemory?: int<4, 8>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
