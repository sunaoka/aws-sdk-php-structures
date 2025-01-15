<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DescribeScalingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Expression
 * @property PredictiveScalingMetricStat|null $MetricStat
 * @property string|null $Label
 * @property bool|null $ReturnData
 */
class PredictiveScalingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string|null,
     *     MetricStat?: PredictiveScalingMetricStat|null,
     *     Label?: string|null,
     *     ReturnData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
