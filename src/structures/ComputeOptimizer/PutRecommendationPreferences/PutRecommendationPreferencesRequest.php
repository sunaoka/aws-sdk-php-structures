<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService' $resourceType
 * @property Shapes\Scope|null $scope
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive'|null $inferredWorkloadTypes
 * @property Shapes\ExternalMetricsPreference|null $externalMetricsPreference
 */
class PutRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService',
     *     scope?: Shapes\Scope|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     inferredWorkloadTypes?: 'Active'|'Inactive'|null,
     *     externalMetricsPreference?: Shapes\ExternalMetricsPreference|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
