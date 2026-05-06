<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRecommendedPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendedAction
 * @property string|null $ExistingPolicy
 * @property string|null $ExistingPolicyId
 * @property \Aws\Api\DateTimeResult|null $PolicyUpdatedAt
 * @property string|null $RecommendedPolicy
 */
class UnusedPermissionsRecommendationStep extends Shape
{
    /**
     * @param array{
     *     RecommendedAction?: string|null,
     *     ExistingPolicy?: string|null,
     *     ExistingPolicyId?: string|null,
     *     PolicyUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     RecommendedPolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
