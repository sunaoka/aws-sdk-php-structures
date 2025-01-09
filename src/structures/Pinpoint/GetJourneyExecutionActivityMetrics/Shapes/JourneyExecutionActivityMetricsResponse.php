<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionActivityMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivityType
 * @property string $ApplicationId
 * @property string $JourneyActivityId
 * @property string $JourneyId
 * @property string $LastEvaluatedTime
 * @property array<string, string> $Metrics
 */
class JourneyExecutionActivityMetricsResponse extends Shape
{
    /**
     * @param array{
     *     ActivityType: string,
     *     ApplicationId: string,
     *     JourneyActivityId: string,
     *     JourneyId: string,
     *     LastEvaluatedTime: string,
     *     Metrics: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
