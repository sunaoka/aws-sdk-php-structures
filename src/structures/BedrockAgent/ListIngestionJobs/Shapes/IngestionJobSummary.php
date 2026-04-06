<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceId
 * @property string|null $description
 * @property string $ingestionJobId
 * @property string $knowledgeBaseId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property IngestionJobStatistics|null $statistics
 * @property 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     description?: string|null,
     *     ingestionJobId: string,
     *     knowledgeBaseId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     statistics?: IngestionJobStatistics|null,
     *     status: 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
