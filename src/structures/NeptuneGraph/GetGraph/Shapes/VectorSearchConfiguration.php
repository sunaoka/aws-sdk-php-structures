<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $dimension
 */
class VectorSearchConfiguration extends Shape
{
    /**
     * @param array{dimension: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
