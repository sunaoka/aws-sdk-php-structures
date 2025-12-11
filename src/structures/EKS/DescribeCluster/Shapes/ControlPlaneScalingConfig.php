<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'tier-xl'|'tier-2xl'|'tier-4xl'|null $tier
 */
class ControlPlaneScalingConfig extends Shape
{
    /**
     * @param array{tier?: 'standard'|'tier-xl'|'tier-2xl'|'tier-4xl'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
