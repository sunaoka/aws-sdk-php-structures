<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property Shapes\Scope $scope
 * @property 'Active'|'Inactive' $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive' $inferredWorkloadTypes
 * @property Shapes\ExternalMetricsPreference $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93' $lookBackPeriod
 * @property list<Shapes\UtilizationPreference> $utilizationPreferences
 * @property list<Shapes\PreferredResource> $preferredResources
 * @property 'AfterDiscounts'|'BeforeDiscounts' $savingsEstimationMode
 */
class PutRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     scope?: Shapes\Scope,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive',
     *     inferredWorkloadTypes?: 'Active'|'Inactive',
     *     externalMetricsPreference?: Shapes\ExternalMetricsPreference,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93',
     *     utilizationPreferences?: list<Shapes\UtilizationPreference>,
     *     preferredResources?: list<Shapes\PreferredResource>,
     *     savingsEstimationMode?: 'AfterDiscounts'|'BeforeDiscounts'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
