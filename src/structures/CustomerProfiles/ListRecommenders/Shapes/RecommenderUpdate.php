<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommenderConfig|null $RecommenderConfig
 * @property 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'FAILED'|'STOPPING'|'INACTIVE'|'STARTING'|'DELETING'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $FailureReason
 */
class RecommenderUpdate extends Shape
{
    /**
     * @param array{
     *     RecommenderConfig?: RecommenderConfig|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'ACTIVE'|'FAILED'|'STOPPING'|'INACTIVE'|'STARTING'|'DELETING'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
