<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scope|null $scope
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|null $resourceType
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive'|null $inferredWorkloadTypes
 * @property ExternalMetricsPreference|null $externalMetricsPreference
 */
class RecommendationPreferencesDetail extends Shape
{
    /**
     * @param array{
     *     scope?: Scope|null,
     *     resourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     inferredWorkloadTypes?: 'Active'|'Inactive'|null,
     *     externalMetricsPreference?: ExternalMetricsPreference|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
