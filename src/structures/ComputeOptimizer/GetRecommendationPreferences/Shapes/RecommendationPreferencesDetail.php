<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scope $scope
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property 'Active'|'Inactive' $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive' $inferredWorkloadTypes
 * @property ExternalMetricsPreference $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93' $lookBackPeriod
 * @property list<UtilizationPreference> $utilizationPreferences
 * @property list<EffectivePreferredResource> $preferredResources
 * @property 'AfterDiscounts'|'BeforeDiscounts' $savingsEstimationMode
 */
class RecommendationPreferencesDetail extends Shape
{
    /**
     * @param array{
     *     scope?: Scope,
     *     resourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive',
     *     inferredWorkloadTypes?: 'Active'|'Inactive',
     *     externalMetricsPreference?: ExternalMetricsPreference,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93',
     *     utilizationPreferences?: list<UtilizationPreference>,
     *     preferredResources?: list<EffectivePreferredResource>,
     *     savingsEstimationMode?: 'AfterDiscounts'|'BeforeDiscounts'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
