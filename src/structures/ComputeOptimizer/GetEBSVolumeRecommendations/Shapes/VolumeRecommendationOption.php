<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VolumeConfiguration|null $configuration
 * @property double|null $performanceRisk
 * @property int|null $rank
 * @property SavingsOpportunity|null $savingsOpportunity
 */
class VolumeRecommendationOption extends Shape
{
    /**
     * @param array{
     *     configuration?: VolumeConfiguration|null,
     *     performanceRisk?: double|null,
     *     rank?: int|null,
     *     savingsOpportunity?: SavingsOpportunity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
