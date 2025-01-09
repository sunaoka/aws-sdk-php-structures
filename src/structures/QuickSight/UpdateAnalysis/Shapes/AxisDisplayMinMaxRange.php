<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Minimum
 * @property double $Maximum
 */
class AxisDisplayMinMaxRange extends Shape
{
    /**
     * @param array{
     *     Minimum?: double,
     *     Maximum?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
