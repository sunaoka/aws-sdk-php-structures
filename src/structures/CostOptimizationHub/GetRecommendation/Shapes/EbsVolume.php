<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumeConfiguration|null $configuration
 * @property ResourceCostCalculation|null $costCalculation
 */
class EbsVolume extends Shape
{
    /**
     * @param array{
     *     configuration?: EbsVolumeConfiguration|null,
     *     costCalculation?: ResourceCostCalculation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
