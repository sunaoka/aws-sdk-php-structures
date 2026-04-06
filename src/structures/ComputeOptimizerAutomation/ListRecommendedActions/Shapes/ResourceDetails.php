<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListRecommendedActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EbsVolume|null $ebsVolume
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{ebsVolume?: EbsVolume|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
