<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'applying'|'applied' $Code
 * @property string $Message
 */
class ClientVpnEndpointAttributeStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'applying'|'applied',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
