<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceArn
 * @property string $recommendationId
 * @property string $taskId
 * @property string|null $goalId
 * @property string $title
 * @property RecommendationContent $content
 * @property 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS' $status
 * @property 'HIGH'|'MEDIUM'|'LOW' $priority
 * @property int|null $goalVersion
 * @property string|null $additionalContext
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property int $version
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     agentSpaceArn: string,
     *     recommendationId: string,
     *     taskId: string,
     *     goalId?: string|null,
     *     title: string,
     *     content: RecommendationContent,
     *     status: 'PROPOSED'|'ACCEPTED'|'REJECTED'|'CLOSED'|'COMPLETED'|'UPDATE_IN_PROGRESS',
     *     priority: 'HIGH'|'MEDIUM'|'LOW',
     *     goalVersion?: int|null,
     *     additionalContext?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     version: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
