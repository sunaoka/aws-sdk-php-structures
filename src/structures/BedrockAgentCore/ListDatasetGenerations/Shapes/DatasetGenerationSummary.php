<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListDatasetGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $generationId
 * @property string $datasetId
 * @property string $name
 * @property string|null $description
 * @property 'FIXED'|'DYNAMIC' $scenarioType
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class DatasetGenerationSummary extends Shape
{
    /**
     * @param array{
     *     generationId: string,
     *     datasetId: string,
     *     name: string,
     *     description?: string|null,
     *     scenarioType: 'FIXED'|'DYNAMIC',
     *     status: 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
