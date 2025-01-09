<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property string $Id
 * @property string $Label
 * @property TargetTrackingMetricStat $MetricStat
 * @property bool $ReturnData
 */
class TargetTrackingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Expression?: string,
     *     Id: string,
     *     Label?: string,
     *     MetricStat?: TargetTrackingMetricStat,
     *     ReturnData?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
