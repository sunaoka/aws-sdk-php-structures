<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle' $resourceType
 * @property Shapes\Scope|null $scope
 * @property 'Active'|'Inactive'|null $enhancedInfrastructureMetrics
 * @property 'Active'|'Inactive'|null $inferredWorkloadTypes
 * @property Shapes\ExternalMetricsPreference|null $externalMetricsPreference
 * @property 'DAYS_14'|'DAYS_32'|'DAYS_93'|null $lookBackPeriod
 * @property list<Shapes\UtilizationPreference>|null $utilizationPreferences
 * @property list<Shapes\PreferredResource>|null $preferredResources
 * @property 'AfterDiscounts'|'BeforeDiscounts'|null $savingsEstimationMode
 */
class PutRecommendationPreferencesRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'NotApplicable'|'EcsService'|'License'|'RdsDBInstance'|'Idle',
     *     scope?: Shapes\Scope|null,
     *     enhancedInfrastructureMetrics?: 'Active'|'Inactive'|null,
     *     inferredWorkloadTypes?: 'Active'|'Inactive'|null,
     *     externalMetricsPreference?: Shapes\ExternalMetricsPreference|null,
     *     lookBackPeriod?: 'DAYS_14'|'DAYS_32'|'DAYS_93'|null,
     *     utilizationPreferences?: list<Shapes\UtilizationPreference>|null,
     *     preferredResources?: list<Shapes\PreferredResource>|null,
     *     savingsEstimationMode?: 'AfterDiscounts'|'BeforeDiscounts'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
