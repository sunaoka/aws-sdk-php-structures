<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\DeleteRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property Shapes\Scope|null $scope
 * @property list<'EnhancedInfrastructureMetrics'|'InferredWorkloadTypes'|'ExternalMetricsPreference'|'LookBackPeriodPreference'|'PreferredResources'|'UtilizationPreferences'> $recommendationPreferenceNames
 */
class DeleteRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     scope?: Shapes\Scope|null,
     *     recommendationPreferenceNames: list<'EnhancedInfrastructureMetrics'|'InferredWorkloadTypes'|'ExternalMetricsPreference'|'LookBackPeriodPreference'|'PreferredResources'|'UtilizationPreferences'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
