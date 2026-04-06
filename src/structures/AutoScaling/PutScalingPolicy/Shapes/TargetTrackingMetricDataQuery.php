<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $Expression
 * @property TargetTrackingMetricStat|null $MetricStat
 * @property string|null $Label
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
     *     ReturnData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
