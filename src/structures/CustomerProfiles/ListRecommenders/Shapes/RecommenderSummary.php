<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommenderName
 * @property 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now'|null $RecipeName
 * @property RecommenderConfig|null $RecommenderConfig
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'FAILED'|'STOPPING'|'INACTIVE'|'STARTING'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 * @property string|null $FailureReason
 * @property RecommenderUpdate|null $LatestRecommenderUpdate
 */
class RecommenderSummary extends Shape
{
    /**
     * @param array{
     *     RecommenderName?: string|null,
     *     RecipeName?: 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now'|null,
     *     RecommenderConfig?: RecommenderConfig|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'FAILED'|'STOPPING'|'INACTIVE'|'STARTING'|'DELETING'|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Tags?: array<string, string>|null,
     *     FailureReason?: string|null,
     *     LatestRecommenderUpdate?: RecommenderUpdate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
