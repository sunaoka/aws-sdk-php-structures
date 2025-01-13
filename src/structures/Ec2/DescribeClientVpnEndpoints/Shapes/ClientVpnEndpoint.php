<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientVpnEndpointId
 * @property string $Description
 * @property ClientVpnEndpointStatus $Status
 * @property string $CreationTime
 * @property string $DeletionTime
 * @property string $DnsName
 * @property string $ClientCidrBlock
 * @property list<string> $DnsServers
 * @property bool $SplitTunnel
 * @property 'openvpn' $VpnProtocol
 * @property 'tcp'|'udp' $TransportProtocol
 * @property int $VpnPort
 * @property list<AssociatedTargetNetwork> $AssociatedTargetNetworks
 * @property string $ServerCertificateArn
 * @property list<ClientVpnAuthentication> $AuthenticationOptions
 * @property ConnectionLogResponseOptions $ConnectionLogOptions
 * @property list<Tag> $Tags
 * @property list<string> $SecurityGroupIds
 * @property string $VpcId
 * @property string $SelfServicePortalUrl
 * @property ClientConnectResponseOptions $ClientConnectOptions
 * @property int $SessionTimeoutHours
 * @property ClientLoginBannerResponseOptions $ClientLoginBannerOptions
 * @property bool $DisconnectOnSessionTimeout
 */
class ClientVpnEndpoint extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string,
     *     Description?: string,
     *     Status?: ClientVpnEndpointStatus,
     *     CreationTime?: string,
     *     DeletionTime?: string,
     *     DnsName?: string,
     *     ClientCidrBlock?: string,
     *     DnsServers?: list<string>,
     *     SplitTunnel?: bool,
     *     VpnProtocol?: 'openvpn',
     *     TransportProtocol?: 'tcp'|'udp',
     *     VpnPort?: int,
     *     AssociatedTargetNetworks?: list<AssociatedTargetNetwork>,
     *     ServerCertificateArn?: string,
     *     AuthenticationOptions?: list<ClientVpnAuthentication>,
     *     ConnectionLogOptions?: ConnectionLogResponseOptions,
     *     Tags?: list<Tag>,
     *     SecurityGroupIds?: list<string>,
     *     VpcId?: string,
     *     SelfServicePortalUrl?: string,
     *     ClientConnectOptions?: ClientConnectResponseOptions,
     *     SessionTimeoutHours?: int,
     *     ClientLoginBannerOptions?: ClientLoginBannerResponseOptions,
     *     DisconnectOnSessionTimeout?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
