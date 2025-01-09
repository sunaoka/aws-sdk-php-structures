<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterNetworkServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPort
 * @property int $ToPort
 */
class TrafficMirrorPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int,
     *     ToPort?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
