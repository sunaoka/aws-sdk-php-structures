<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $PercentileValue
 */
class PercentileAggregation extends Shape
{
    /**
     * @param array{PercentileValue?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
