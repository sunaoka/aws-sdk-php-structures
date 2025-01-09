<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12Details $x12Details
 */
class EdiType extends Shape
{
    /**
     * @param array{x12Details?: X12Details} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
