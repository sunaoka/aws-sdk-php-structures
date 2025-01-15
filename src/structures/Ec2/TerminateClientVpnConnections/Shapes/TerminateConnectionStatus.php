<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectionId
 * @property ClientVpnConnectionStatus|null $PreviousStatus
 * @property ClientVpnConnectionStatus|null $CurrentStatus
 */
class TerminateConnectionStatus extends Shape
{
    /**
     * @param array{
     *     ConnectionId?: string|null,
     *     PreviousStatus?: ClientVpnConnectionStatus|null,
     *     CurrentStatus?: ClientVpnConnectionStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
