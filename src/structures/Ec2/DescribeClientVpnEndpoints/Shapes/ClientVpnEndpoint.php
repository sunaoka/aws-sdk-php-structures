<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $Description
 * @property ClientVpnEndpointStatus|null $Status
 * @property string|null $CreationTime
 * @property string|null $DeletionTime
 * @property string|null $DnsName
 * @property string|null $ClientCidrBlock
 * @property list<string>|null $DnsServers
 * @property bool|null $SplitTunnel
 * @property 'openvpn'|null $VpnProtocol
 * @property 'tcp'|'udp'|null $TransportProtocol
 * @property int|null $VpnPort
 * @property list<AssociatedTargetNetwork>|null $AssociatedTargetNetworks
 * @property string|null $ServerCertificateArn
 * @property list<ClientVpnAuthentication>|null $AuthenticationOptions
 * @property ConnectionLogResponseOptions|null $ConnectionLogOptions
 * @property list<Tag>|null $Tags
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $VpcId
 * @property string|null $SelfServicePortalUrl
 * @property ClientConnectResponseOptions|null $ClientConnectOptions
 * @property int|null $SessionTimeoutHours
 * @property ClientLoginBannerResponseOptions|null $ClientLoginBannerOptions
 * @property bool|null $DisconnectOnSessionTimeout
 */
class ClientVpnEndpoint extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string|null,
     *     Description?: string|null,
     *     Status?: ClientVpnEndpointStatus|null,
     *     CreationTime?: string|null,
     *     DeletionTime?: string|null,
     *     DnsName?: string|null,
     *     ClientCidrBlock?: string|null,
     *     DnsServers?: list<string>|null,
     *     SplitTunnel?: bool|null,
     *     VpnProtocol?: 'openvpn'|null,
     *     TransportProtocol?: 'tcp'|'udp'|null,
     *     VpnPort?: int|null,
     *     AssociatedTargetNetworks?: list<AssociatedTargetNetwork>|null,
     *     ServerCertificateArn?: string|null,
     *     AuthenticationOptions?: list<ClientVpnAuthentication>|null,
     *     ConnectionLogOptions?: ConnectionLogResponseOptions|null,
     *     Tags?: list<Tag>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SelfServicePortalUrl?: string|null,
     *     ClientConnectOptions?: ClientConnectResponseOptions|null,
     *     SessionTimeoutHours?: int|null,
     *     ClientLoginBannerOptions?: ClientLoginBannerResponseOptions|null,
     *     DisconnectOnSessionTimeout?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
