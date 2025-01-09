<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchGetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $ResourceArn
 * @property 'Min'|'Max'|'Avg'|'Count'|'StdDev'|'Last' $MetricStat
 * @property 'OneMinute'|'FiveMinute'|'OneHour'|'IterationNumber' $Period
 * @property 'IterationNumber'|'Timestamp' $XAxisType
 * @property int $Start
 * @property int $End
 */
class MetricQuery extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     ResourceArn: string,
     *     MetricStat: 'Min'|'Max'|'Avg'|'Count'|'StdDev'|'Last',
     *     Period: 'OneMinute'|'FiveMinute'|'OneHour'|'IterationNumber',
     *     XAxisType: 'IterationNumber'|'Timestamp',
     *     Start?: int,
     *     End?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
