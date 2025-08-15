<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $ingestionJobId
 * @property string|null $description
 * @property 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property IngestionJobStatistics|null $statistics
 */
class IngestionJobSummary extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     ingestionJobId: string,
     *     description?: string|null,
     *     status: 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED',
     *     startedAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     statistics?: IngestionJobStatistics|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
