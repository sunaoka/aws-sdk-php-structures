<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlanPurchaseRecommendationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StartTime
 * @property string $EstimatedOnDemandCost
 * @property string $CurrentCoverage
 * @property string $EstimatedCoverage
 * @property string $EstimatedNewCommitmentUtilization
 */
class RecommendationDetailHourlyMetrics extends Shape
{
    /**
     * @param array{
     *     StartTime?: string,
     *     EstimatedOnDemandCost?: string,
     *     CurrentCoverage?: string,
     *     EstimatedCoverage?: string,
     *     EstimatedNewCommitmentUtilization?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
