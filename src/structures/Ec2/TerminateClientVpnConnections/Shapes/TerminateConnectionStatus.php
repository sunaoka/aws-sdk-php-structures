<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectionId
 * @property ClientVpnConnectionStatus $PreviousStatus
 * @property ClientVpnConnectionStatus $CurrentStatus
 */
class TerminateConnectionStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionId?: string,
     *     PreviousStatus?: ClientVpnConnectionStatus,
     *     CurrentStatus?: ClientVpnConnectionStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
