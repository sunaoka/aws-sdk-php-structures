<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property int $NumTimeSeries
 * @property ContributionMatrix $ContributionMatrix
 */
class MetricLevelImpact extends Shape
{
    /**
     * @param array{
     *     MetricName?: string,
     *     NumTimeSeries?: int,
     *     ContributionMatrix?: ContributionMatrix
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
