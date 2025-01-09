<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientVpnEndpointId
 * @property string $Timestamp
 * @property string $ConnectionId
 * @property string $Username
 * @property string $ConnectionEstablishedTime
 * @property string $IngressBytes
 * @property string $EgressBytes
 * @property string $IngressPackets
 * @property string $EgressPackets
 * @property string $ClientIp
 * @property string $CommonName
 * @property ClientVpnConnectionStatus $Status
 * @property string $ConnectionEndTime
 * @property list<string> $PostureComplianceStatuses
 */
class ClientVpnConnection extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string,
     *     Timestamp?: string,
     *     ConnectionId?: string,
     *     Username?: string,
     *     ConnectionEstablishedTime?: string,
     *     IngressBytes?: string,
     *     EgressBytes?: string,
     *     IngressPackets?: string,
     *     EgressPackets?: string,
     *     ClientIp?: string,
     *     CommonName?: string,
     *     Status?: ClientVpnConnectionStatus,
     *     ConnectionEndTime?: string,
     *     PostureComplianceStatuses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
