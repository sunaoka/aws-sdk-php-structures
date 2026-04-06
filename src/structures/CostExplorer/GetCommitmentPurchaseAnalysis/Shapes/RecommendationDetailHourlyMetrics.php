<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCommitmentPurchaseAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StartTime
 * @property string|null $EstimatedOnDemandCost
 * @property string|null $CurrentCoverage
 * @property string|null $EstimatedCoverage
 * @property string|null $EstimatedNewCommitmentUtilization
 */
class RecommendationDetailHourlyMetrics extends Shape
{
    /**
     * @param array{
     *     StartTime?: string|null,
     *     EstimatedOnDemandCost?: string|null,
     *     CurrentCoverage?: string|null,
     *     EstimatedCoverage?: string|null,
     *     EstimatedNewCommitmentUtilization?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
