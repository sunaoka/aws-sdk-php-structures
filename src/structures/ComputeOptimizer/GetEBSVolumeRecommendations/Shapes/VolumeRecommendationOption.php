<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeConfiguration $configuration
 * @property double $performanceRisk
 * @property int $rank
 * @property SavingsOpportunity $savingsOpportunity
 * @property EBSSavingsOpportunityAfterDiscounts $savingsOpportunityAfterDiscounts
 */
class VolumeRecommendationOption extends Shape
{
    /**
     * @param array{
     *     configuration?: VolumeConfiguration,
     *     performanceRisk?: double,
     *     rank?: int,
     *     savingsOpportunity?: SavingsOpportunity,
     *     savingsOpportunityAfterDiscounts?: EBSSavingsOpportunityAfterDiscounts
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
