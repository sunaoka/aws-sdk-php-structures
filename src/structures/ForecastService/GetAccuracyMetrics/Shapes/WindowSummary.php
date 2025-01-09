<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $TestWindowStart
 * @property \Aws\Api\DateTimeResult $TestWindowEnd
 * @property int $ItemCount
 * @property 'SUMMARY'|'COMPUTED' $EvaluationType
 * @property Metrics $Metrics
 */
class WindowSummary extends Shape
{
    /**
     * @param array{
     *     TestWindowStart?: \Aws\Api\DateTimeResult,
     *     TestWindowEnd?: \Aws\Api\DateTimeResult,
     *     ItemCount?: int,
     *     EvaluationType?: 'SUMMARY'|'COMPUTED',
     *     Metrics?: Metrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
