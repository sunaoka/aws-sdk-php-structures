<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetIngestionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceId
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property string $ingestionJobId
 * @property string $knowledgeBaseId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property IngestionJobStatistics|null $statistics
 * @property 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class IngestionJob extends Shape
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     ingestionJobId: string,
     *     knowledgeBaseId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     statistics?: IngestionJobStatistics|null,
     *     status: 'STARTING'|'IN_PROGRESS'|'COMPLETE'|'FAILED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
