<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Expression
 * @property PredictiveScalingMetricStat $MetricStat
 * @property string $Label
 * @property bool $ReturnData
 */
class PredictiveScalingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string,
     *     MetricStat?: PredictiveScalingMetricStat,
     *     Label?: string,
     *     ReturnData?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
