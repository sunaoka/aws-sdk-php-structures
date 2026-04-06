<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DeleteRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService' $resourceType
 * @property Shapes\Scope|null $scope
 * @property list<'EnhancedInfrastructureMetrics'|'InferredWorkloadTypes'|'ExternalMetricsPreference'> $recommendationPreferenceNames
 */
class DeleteRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService',
     *     scope?: Shapes\Scope|null,
     *     recommendationPreferenceNames: list<'EnhancedInfrastructureMetrics'|'InferredWorkloadTypes'|'ExternalMetricsPreference'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
