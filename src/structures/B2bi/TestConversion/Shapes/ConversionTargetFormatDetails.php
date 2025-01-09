<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12Details $x12
 */
class ConversionTargetFormatDetails extends Shape
{
    /**
     * @param array{x12?: X12Details} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
