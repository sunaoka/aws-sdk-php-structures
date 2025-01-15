<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'applying'|'applied'|null $Code
 * @property string|null $Message
 */
class ClientVpnEndpointAttributeStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'applying'|'applied'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
