<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string $LastEvaluatedTime
 * @property array<string, string> $Metrics
 * @property string $RunId
 */
class JourneyRunExecutionMetricsResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     LastEvaluatedTime: string,
     *     Metrics: array<string, string>,
     *     RunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
