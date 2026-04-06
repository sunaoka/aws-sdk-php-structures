<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\RestoreGraphFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65536> $dimension
 */
class VectorSearchConfiguration extends Shape
{
    /**
     * @param array{dimension: int<1, 65536>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
