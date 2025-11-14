<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DeregisterTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int<1, 65535>|null $Port
 * @property string|null $AvailabilityZone
 * @property string|null $QuicServerId
 */
class TargetDescription extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Port?: int<1, 65535>|null,
     *     AvailabilityZone?: string|null,
     *     QuicServerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
