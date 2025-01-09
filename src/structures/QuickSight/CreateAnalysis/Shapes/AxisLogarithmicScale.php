<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Base
 */
class AxisLogarithmicScale extends Shape
{
    /**
     * @param array{Base?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
