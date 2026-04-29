<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendationId
 * @property string $recommendationArn
 * @property string $name
 * @property string|null $description
 * @property 'SYSTEM_PROMPT_RECOMMENDATION'|'TOOL_DESCRIPTION_RECOMMENDATION' $type
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     recommendationId: string,
     *     recommendationArn: string,
     *     name: string,
     *     description?: string|null,
     *     type: 'SYSTEM_PROMPT_RECOMMENDATION'|'TOOL_DESCRIPTION_RECOMMENDATION',
     *     status: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
