<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationGenerations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $profileArn
 * @property string|null $name
 * @property 'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'ERROR' $status
 * @property \Aws\Api\DateTimeResult|null $estimatedCompletionTime
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 * @property 'ONDEMAND'|'SCHEDULED'|'BASIC'|null $generationType
 * @property list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>|null $generationRecommendationTypes
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property ErrorDetails|null $errorDetails
 */
class AgentRecommendationGenerationSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     profileArn: string,
     *     name?: string|null,
     *     status: 'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'ERROR',
     *     estimatedCompletionTime?: \Aws\Api\DateTimeResult|null,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     generationType?: 'ONDEMAND'|'SCHEDULED'|'BASIC'|null,
     *     generationRecommendationTypes?: list<'RESOURCE'|'ARCHITECTURE'|'APPLICATION'>|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     errorDetails?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
