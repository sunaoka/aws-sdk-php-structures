<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeregisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int<1, 65535> $Port
 * @property string $AvailabilityZone
 */
class TargetDescription extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Port?: int<1, 65535>,
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
