<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $Timestamp
 * @property string|null $ConnectionId
 * @property string|null $Username
 * @property string|null $ConnectionEstablishedTime
 * @property string|null $IngressBytes
 * @property string|null $EgressBytes
 * @property string|null $IngressPackets
 * @property string|null $EgressPackets
 * @property string|null $ClientIp
 * @property string|null $ClientIpv6Address
 * @property string|null $CommonName
 * @property ClientVpnConnectionStatus|null $Status
 * @property string|null $ConnectionEndTime
 * @property list<string>|null $PostureComplianceStatuses
 */
class ClientVpnConnection extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string|null,
     *     Timestamp?: string|null,
     *     ConnectionId?: string|null,
     *     Username?: string|null,
     *     ConnectionEstablishedTime?: string|null,
     *     IngressBytes?: string|null,
     *     EgressBytes?: string|null,
     *     IngressPackets?: string|null,
     *     EgressPackets?: string|null,
     *     ClientIp?: string|null,
     *     ClientIpv6Address?: string|null,
     *     CommonName?: string|null,
     *     Status?: ClientVpnConnectionStatus|null,
     *     ConnectionEndTime?: string|null,
     *     PostureComplianceStatuses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
