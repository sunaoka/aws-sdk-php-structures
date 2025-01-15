<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetricName
 * @property int|null $NumTimeSeries
 * @property ContributionMatrix|null $ContributionMatrix
 */
class MetricLevelImpact extends Shape
{
    /**
     * @param array{
     *     MetricName?: string|null,
     *     NumTimeSeries?: int|null,
     *     ContributionMatrix?: ContributionMatrix|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
