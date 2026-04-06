<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Summary>|null $summaries
 * @property 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|null $recommendationResourceType
 * @property string|null $accountId
 * @property SavingsOpportunity|null $savingsOpportunity
 * @property CurrentPerformanceRiskRatings|null $currentPerformanceRiskRatings
 * @property list<InferredWorkloadSaving>|null $inferredWorkloadSavings
 */
class RecommendationSummary extends Shape
{
    /**
     * @param array{
     *     summaries?: list<Summary>|null,
     *     recommendationResourceType?: 'Ec2Instance'|'AutoScalingGroup'|'EbsVolume'|'LambdaFunction'|'EcsService'|null,
     *     accountId?: string|null,
     *     savingsOpportunity?: SavingsOpportunity|null,
     *     currentPerformanceRiskRatings?: CurrentPerformanceRiskRatings|null,
     *     inferredWorkloadSavings?: list<InferredWorkloadSaving>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
