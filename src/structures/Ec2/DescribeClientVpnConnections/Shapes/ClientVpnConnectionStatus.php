<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'failed-to-terminate'|'terminating'|'terminated'|null $Code
 * @property string|null $Message
 */
class ClientVpnConnectionStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'active'|'failed-to-terminate'|'terminating'|'terminated'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
