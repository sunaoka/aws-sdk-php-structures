<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12Details|null $x12Details
 */
class EdiType extends Shape
{
    /**
     * @param array{x12Details?: X12Details|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
