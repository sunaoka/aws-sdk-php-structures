<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $policyUpdatedAt
 * @property 'CREATE_POLICY'|'DETACH_POLICY' $recommendedAction
 * @property string|null $recommendedPolicy
 * @property string|null $existingPolicyId
 */
class UnusedPermissionsRecommendedStep extends Shape
{
    /**
     * @param array{
     *     policyUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     recommendedAction: 'CREATE_POLICY'|'DETACH_POLICY',
     *     recommendedPolicy?: string|null,
     *     existingPolicyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
