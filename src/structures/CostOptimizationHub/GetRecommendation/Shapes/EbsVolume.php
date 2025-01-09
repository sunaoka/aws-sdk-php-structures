<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumeConfiguration $configuration
 * @property ResourceCostCalculation $costCalculation
 */
class EbsVolume extends Shape
{
    /**
     * @param array{
     *     configuration?: EbsVolumeConfiguration,
     *     costCalculation?: ResourceCostCalculation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
