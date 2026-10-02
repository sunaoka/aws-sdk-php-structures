<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\StartIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $ingestionJobId
 * @property string|null $description
 * @property 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED' $status
 * @property IngestionJobStatistics|null $statistics
 * @property list<string>|null $failureReasons
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $textReadyAt
 */
class IngestionJob extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     ingestionJobId: string,
     *     description?: string|null,
     *     status: 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'STOPPING'|'STOPPED',
     *     statistics?: IngestionJobStatistics|null,
     *     failureReasons?: list<string>|null,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     textReadyAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
