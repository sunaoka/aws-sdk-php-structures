<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comparison
 * @property double|null $ThresholdValue
 */
class ThresholdV2 extends Shape
{
    /**
     * @param array{
     *     Comparison?: string|null,
     *     ThresholdValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
