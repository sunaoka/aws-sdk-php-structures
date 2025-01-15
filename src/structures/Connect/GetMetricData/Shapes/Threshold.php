<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LT'|null $Comparison
 * @property double|null $ThresholdValue
 */
class Threshold extends Shape
{
    /**
     * @param array{
     *     Comparison?: 'LT'|null,
     *     ThresholdValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
