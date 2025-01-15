<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property string|null $Message
 */
class StateReason extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
