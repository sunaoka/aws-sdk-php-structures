<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $TestWindowStart
 * @property \Aws\Api\DateTimeResult|null $TestWindowEnd
 * @property int|null $ItemCount
 * @property 'SUMMARY'|'COMPUTED'|null $EvaluationType
 * @property Metrics|null $Metrics
 */
class WindowSummary extends Shape
{
    /**
     * @param array{
     *     TestWindowStart?: \Aws\Api\DateTimeResult|null,
     *     TestWindowEnd?: \Aws\Api\DateTimeResult|null,
     *     ItemCount?: int|null,
     *     EvaluationType?: 'SUMMARY'|'COMPUTED'|null,
     *     Metrics?: Metrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
