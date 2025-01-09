<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Expression
 * @property TargetTrackingMetricStat $MetricStat
 * @property string $Label
 * @property int<1, max> $Period
 * @property bool $ReturnData
 */
class TargetTrackingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string,
     *     MetricStat?: TargetTrackingMetricStat,
     *     Label?: string,
     *     Period?: int<1, max>,
     *     ReturnData?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
