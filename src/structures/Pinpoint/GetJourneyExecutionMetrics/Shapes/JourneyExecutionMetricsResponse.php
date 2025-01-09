<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyExecutionMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string $LastEvaluatedTime
 * @property array<string, string> $Metrics
 */
class JourneyExecutionMetricsResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
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
