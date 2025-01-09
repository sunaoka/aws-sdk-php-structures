<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $policyUpdatedAt
 * @property 'CREATE_POLICY'|'DETACH_POLICY' $recommendedAction
 * @property string $recommendedPolicy
 * @property string $existingPolicyId
 */
class UnusedPermissionsRecommendedStep extends Shape
{
    /**
     * @param array{
     *     policyUpdatedAt?: \Aws\Api\DateTimeResult,
     *     recommendedAction: 'CREATE_POLICY'|'DETACH_POLICY',
     *     recommendedPolicy?: string,
     *     existingPolicyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
