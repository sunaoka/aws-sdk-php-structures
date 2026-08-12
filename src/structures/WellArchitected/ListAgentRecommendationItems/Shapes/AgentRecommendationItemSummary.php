<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $recommendationArn
 * @property 'AWS_RESOURCE'|'RECOMMENDATION' $type
 * @property Document $metadata
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $lastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $lastModifiedAt
 */
class AgentRecommendationItemSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     recommendationArn: string,
     *     type: 'AWS_RESOURCE'|'RECOMMENDATION',
     *     metadata: Document,
     *     createdBy: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastModifiedBy?: string|null,
     *     lastModifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
