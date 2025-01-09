<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $FromPort
 * @property int<1, 65535> $ToPort
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>,
     *     ToPort?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
