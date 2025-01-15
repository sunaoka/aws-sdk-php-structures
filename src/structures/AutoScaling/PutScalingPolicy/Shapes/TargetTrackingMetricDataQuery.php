<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Expression
 * @property TargetTrackingMetricStat|null $MetricStat
 * @property string|null $Label
 * @property int<1, max>|null $Period
 * @property bool|null $ReturnData
 */
class TargetTrackingMetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string|null,
     *     MetricStat?: TargetTrackingMetricStat|null,
     *     Label?: string|null,
     *     Period?: int<1, max>|null,
     *     ReturnData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
