<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub' $source
 */
class EBSSavingsEstimationMode extends Shape
{
    /**
     * @param array{source?: 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
