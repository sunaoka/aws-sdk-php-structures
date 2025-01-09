<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string $EndTime
 * @property string $AnomalyGroupId
 * @property double $AnomalyGroupScore
 * @property string $PrimaryMetricName
 * @property list<MetricLevelImpact> $MetricLevelImpactList
 */
class AnomalyGroup extends Shape
{
    /**
     * @param array{
     *     StartTime?: string,
     *     EndTime?: string,
     *     AnomalyGroupId?: string,
     *     AnomalyGroupScore?: double,
     *     PrimaryMetricName?: string,
     *     MetricLevelImpactList?: list<MetricLevelImpact>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
