<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolumeConfiguration|null $configuration
 */
class EbsVolume extends Shape
{
    /**
     * @param array{configuration?: EbsVolumeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
