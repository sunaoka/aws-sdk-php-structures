<?php

namespace Sunaoka\Aws\Structures\SageMakerMetrics\BatchGetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property string $ResourceArn
 * @property 'Min'|'Max'|'Avg'|'Count'|'StdDev'|'Last' $MetricStat
 * @property 'OneMinute'|'FiveMinute'|'OneHour'|'IterationNumber' $Period
 * @property 'IterationNumber'|'Timestamp' $XAxisType
 * @property int|null $Start
 * @property int|null $End
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
     *     Start?: int|null,
     *     End?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
