<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Expression
 * @property string $Id
 * @property string|null $Label
 * @property TargetTrackingMetricStat|null $MetricStat
 * @property bool|null $ReturnData
 */
class TargetTrackingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Expression?: string|null,
     *     Id: string,
     *     Label?: string|null,
     *     MetricStat?: TargetTrackingMetricStat|null,
     *     ReturnData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
