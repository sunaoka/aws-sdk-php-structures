<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommenderFilterName
 * @property string|null $RecommenderFilterExpression
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property 'ACTIVE'|'PENDING'|'IN_PROGRESS'|'FAILED'|'DELETING'|null $Status
 * @property string|null $FailureReason
 * @property array<string, string>|null $Tags
 */
class RecommenderFilterSummary extends Shape
{
    /**
     * @param array{
     *     RecommenderFilterName?: string|null,
     *     RecommenderFilterExpression?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'PENDING'|'IN_PROGRESS'|'FAILED'|'DELETING'|null,
     *     FailureReason?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
