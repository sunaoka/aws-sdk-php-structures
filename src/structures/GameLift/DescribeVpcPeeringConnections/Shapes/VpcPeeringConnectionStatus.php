<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Code
 * @property string $Message
 */
class VpcPeeringConnectionStatus extends Shape
{
    /**
     * @param array{
     *     Code?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
