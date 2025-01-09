<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Summary> $summaries
 * @property list<IdleSummary> $idleSummaries
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage' $recommendationResourceType
 * @property string $accountId
 * @property SavingsOpportunity $savingsOpportunity
 * @property SavingsOpportunity $idleSavingsOpportunity
 * @property SavingsOpportunity $aggregatedSavingsOpportunity
 * @property CurrentPerformanceRiskRatings $currentPerformanceRiskRatings
 * @property list<InferredWorkloadSaving> $inferredWorkloadSavings
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     summaries?: list<Summary>,
     *     idleSummaries?: list<IdleSummary>,
     *     recommendationResourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|'License'|'RdsDBInstance'|'RdsDBInstanceStorage',
     *     accountId?: string,
     *     savingsOpportunity?: SavingsOpportunity,
     *     idleSavingsOpportunity?: SavingsOpportunity,
     *     aggregatedSavingsOpportunity?: SavingsOpportunity,
     *     currentPerformanceRiskRatings?: CurrentPerformanceRiskRatings,
     *     inferredWorkloadSavings?: list<InferredWorkloadSaving>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
