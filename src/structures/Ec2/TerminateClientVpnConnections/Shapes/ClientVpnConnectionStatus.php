<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'failed-to-terminate'|'terminating'|'terminated' $Code
 * @property string $Message
 */
class ClientVpnConnectionStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'active'|'failed-to-terminate'|'terminating'|'terminated',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
