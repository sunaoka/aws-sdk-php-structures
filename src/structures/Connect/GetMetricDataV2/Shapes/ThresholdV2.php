<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comparison
 * @property double $ThresholdValue
 */
class ThresholdV2 extends Shape
{
    /**
     * @param array{
     *     Comparison?: string,
     *     ThresholdValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
