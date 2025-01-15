<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string|null $MonitorArn
 * @property \Aws\Api\DateTimeResult|null $EvaluationTime
 * @property string|null $EvaluationState
 * @property \Aws\Api\DateTimeResult|null $WindowStartDatetime
 * @property \Aws\Api\DateTimeResult|null $WindowEndDatetime
 * @property PredictorEvent|null $PredictorEvent
 * @property MonitorDataSource|null $MonitorDataSource
 * @property list<MetricResult>|null $MetricResults
 * @property int|null $NumItemsEvaluated
 * @property string|null $Message
 */
class PredictorMonitorEvaluation extends Shape
{
    /**
     * @param array{
     *     ResourceArn?: string|null,
     *     MonitorArn?: string|null,
     *     EvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     EvaluationState?: string|null,
     *     WindowStartDatetime?: \Aws\Api\DateTimeResult|null,
     *     WindowEndDatetime?: \Aws\Api\DateTimeResult|null,
     *     PredictorEvent?: PredictorEvent|null,
     *     MonitorDataSource?: MonitorDataSource|null,
     *     MetricResults?: list<MetricResult>|null,
     *     NumItemsEvaluated?: int|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
