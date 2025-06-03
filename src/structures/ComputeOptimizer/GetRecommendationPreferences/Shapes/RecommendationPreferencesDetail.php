<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scope|null $scope
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'AuroraDBClusterStorage'|'Idle'|null $resourceType
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive'|null $inferredWorkloadTypes
 * @property ExternalMetricsPreference|null $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 * @property list<UtilizationPreference>|null $utilizationPreferences
 * @property list<EffectivePreferredResource>|null $preferredResources
 * @property 'AfterDiscounts'|'BeforeDiscounts'|null $savingsEstimationMode
 */
class RecommendationPreferencesDetail extends Shape
{
    /**
     * @param array{
     *     scope?: Scope|null,
     *     resourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'AuroraDBClusterStorage'|'Idle'|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     inferredWorkloadTypes?: 'Active'|'Inactive'|null,
     *     externalMetricsPreference?: ExternalMetricsPreference|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null,
     *     utilizationPreferences?: list<UtilizationPreference>|null,
     *     preferredResources?: list<EffectivePreferredResource>|null,
     *     savingsEstimationMode?: 'AfterDiscounts'|'BeforeDiscounts'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
