<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRunExecutionActivityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivityType
 * @property string $ApplicationId
 * @property string $JourneyActivityId
 * @property string $JourneyId
 * @property string $LastEvaluatedTime
 * @property array<string, string> $Metrics
 * @property string $RunId
 */
class JourneyRunExecutionActivityMetricsResponse extends Shape
{
    /**
     * @param array{
     *     ActivityType: string,
     *     ApplicationId: string,
     *     JourneyActivityId: string,
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
