<?php

namespace Sunaoka\Aws\Structures\AutoScaling\GetPredictiveScalingForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Expression
 * @property MetricStat $MetricStat
 * @property string $Label
 * @property bool $ReturnData
 */
class MetricDataQuery extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Expression?: string,
     *     MetricStat?: MetricStat,
     *     Label?: string,
     *     ReturnData?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
