<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub'|null $source
 */
class LambdaSavingsEstimationMode extends Shape
{
    /**
     * @param array{source?: 'PublicPricing'|'CostExplorerRightsizing'|'CostOptimizationHub'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
