<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub' $source
 */
class ECSSavingsEstimationMode extends Shape
{
    /**
     * @param array{source?: 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
