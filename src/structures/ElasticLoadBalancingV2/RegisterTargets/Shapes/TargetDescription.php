<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RegisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $Port
 * @property string $AvailabilityZone
 */
class TargetDescription extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Port?: int,
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
