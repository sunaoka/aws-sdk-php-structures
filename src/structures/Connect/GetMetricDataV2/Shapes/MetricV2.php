<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<ThresholdV2> $Threshold
 * @property list<MetricFilterV2> $MetricFilters
 */
class MetricV2 extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Threshold?: list<ThresholdV2>,
     *     MetricFilters?: list<MetricFilterV2>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
