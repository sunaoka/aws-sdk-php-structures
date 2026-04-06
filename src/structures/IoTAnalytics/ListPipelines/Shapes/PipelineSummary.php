<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineName
 * @property list<ReprocessingSummary>|null $reprocessingSummaries
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdateTime
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     pipelineName?: string|null,
     *     reprocessingSummaries?: list<ReprocessingSummary>|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
