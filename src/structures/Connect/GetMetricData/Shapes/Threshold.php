<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LT' $Comparison
 * @property double $ThresholdValue
 */
class Threshold extends Shape
{
    /**
     * @param array{
     *     Comparison?: 'LT',
     *     ThresholdValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
