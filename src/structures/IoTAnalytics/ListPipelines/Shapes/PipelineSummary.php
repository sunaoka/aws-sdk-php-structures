<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineName
 * @property list<ReprocessingSummary> $reprocessingSummaries
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string,
     *     reprocessingSummaries?: list<ReprocessingSummary>,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
