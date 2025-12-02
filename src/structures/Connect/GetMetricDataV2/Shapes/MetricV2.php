<?php

namespace Sunaoka\Aws\Structures\Connect\GetMetricDataV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<ThresholdV2>|null $Threshold
 * @property string|null $MetricId
 * @property list<MetricFilterV2>|null $MetricFilters
 */
class MetricV2 extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Threshold?: list<ThresholdV2>|null,
     *     MetricId?: string|null,
     *     MetricFilters?: list<MetricFilterV2>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
