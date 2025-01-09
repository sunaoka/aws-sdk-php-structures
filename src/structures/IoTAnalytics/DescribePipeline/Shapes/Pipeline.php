<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property list<PipelineActivity> $activities
 * @property list<ReprocessingSummary> $reprocessingSummaries
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdateTime
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     activities?: list<PipelineActivity>,
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
