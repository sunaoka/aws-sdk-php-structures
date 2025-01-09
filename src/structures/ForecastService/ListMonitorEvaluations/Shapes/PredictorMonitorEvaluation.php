<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property string $MonitorArn
 * @property \Aws\Api\DateTimeResult $EvaluationTime
 * @property string $EvaluationState
 * @property \Aws\Api\DateTimeResult $WindowStartDatetime
 * @property \Aws\Api\DateTimeResult $WindowEndDatetime
 * @property PredictorEvent $PredictorEvent
 * @property MonitorDataSource $MonitorDataSource
 * @property list<MetricResult> $MetricResults
 * @property int $NumItemsEvaluated
 * @property string $Message
 */
class PredictorMonitorEvaluation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string,
     *     MonitorArn?: string,
     *     EvaluationTime?: \Aws\Api\DateTimeResult,
     *     EvaluationState?: string,
     *     WindowStartDatetime?: \Aws\Api\DateTimeResult,
     *     WindowEndDatetime?: \Aws\Api\DateTimeResult,
     *     PredictorEvent?: PredictorEvent,
     *     MonitorDataSource?: MonitorDataSource,
     *     MetricResults?: list<MetricResult>,
     *     NumItemsEvaluated?: int,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
