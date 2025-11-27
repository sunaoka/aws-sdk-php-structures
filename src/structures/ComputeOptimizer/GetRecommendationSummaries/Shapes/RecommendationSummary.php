<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Summary>|null $summaries
 * @property list<IdleSummary>|null $idleSummaries
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage'|'AuroraDBClusterStorage'|'NatGateway'|null $recommendationResourceType
 * @property string|null $accountId
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property SavingsOpportunity|null $idleSavingsOpportunity
 * @property SavingsOpportunity|null $aggregatedSavingsOpportunity
 * @property CurrentPerformanceRiskRatings|null $currentPerformanceRiskRatings
 * @property list<InferredWorkloadSaving>|null $inferredWorkloadSavings
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     summaries?: list<Summary>|null,
     *     idleSummaries?: list<IdleSummary>|null,
     *     recommendationResourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage'|'AuroraDBClusterStorage'|'NatGateway'|null,
     *     accountId?: string|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     idleSavingsOpportunity?: SavingsOpportunity|null,
     *     aggregatedSavingsOpportunity?: SavingsOpportunity|null,
     *     currentPerformanceRiskRatings?: CurrentPerformanceRiskRatings|null,
     *     inferredWorkloadSavings?: list<InferredWorkloadSaving>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
