<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricV2|null $Metric
 * @property double|null $Value
 */
class MetricDataV2 extends Shape
{
    /**
     * @param array{
     *     Metric?: MetricV2|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
