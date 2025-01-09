<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIpPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolName
 * @property 'STANDARD'|'MANAGED' $ScalingMode
 */
class DedicatedIpPool extends Shape
{
    /**
     * @param array{
     *     PoolName: string,
     *     ScalingMode: 'STANDARD'|'MANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
