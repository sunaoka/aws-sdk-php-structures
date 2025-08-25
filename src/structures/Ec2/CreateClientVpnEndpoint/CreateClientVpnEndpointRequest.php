<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientCidrBlock
 * @property string $ServerCertificateArn
 * @property list<Shapes\ClientVpnAuthenticationRequest> $AuthenticationOptions
 * @property Shapes\ConnectionLogOptions $ConnectionLogOptions
 * @property list<string>|null $DnsServers
 * @property 'tcp'|'udp'|null $TransportProtocol
 * @property int|null $VpnPort
 * @property string|null $Description
 * @property bool|null $SplitTunnel
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $VpcId
 * @property 'enabled'|'disabled'|null $SelfServicePortal
 * @property Shapes\ClientConnectOptions|null $ClientConnectOptions
 * @property int|null $SessionTimeoutHours
 * @property Shapes\ClientLoginBannerOptions|null $ClientLoginBannerOptions
 * @property Shapes\ClientRouteEnforcementOptions|null $ClientRouteEnforcementOptions
 * @property bool|null $DisconnectOnSessionTimeout
 * @property 'ipv4'|'ipv6'|'dual-stack'|null $EndpointIpAddressType
 * @property 'ipv4'|'ipv6'|'dual-stack'|null $TrafficIpAddressType
 */
class CreateClientVpnEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClientCidrBlock?: string|null,
     *     ServerCertificateArn: string,
     *     AuthenticationOptions: list<Shapes\ClientVpnAuthenticationRequest>,
     *     ConnectionLogOptions: Shapes\ConnectionLogOptions,
     *     DnsServers?: list<string>|null,
     *     TransportProtocol?: 'tcp'|'udp'|null,
     *     VpnPort?: int|null,
     *     Description?: string|null,
     *     SplitTunnel?: bool|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SelfServicePortal?: 'enabled'|'disabled'|null,
     *     ClientConnectOptions?: Shapes\ClientConnectOptions|null,
     *     SessionTimeoutHours?: int|null,
     *     ClientLoginBannerOptions?: Shapes\ClientLoginBannerOptions|null,
     *     ClientRouteEnforcementOptions?: Shapes\ClientRouteEnforcementOptions|null,
     *     DisconnectOnSessionTimeout?: bool|null,
     *     EndpointIpAddressType?: 'ipv4'|'ipv6'|'dual-stack'|null,
     *     TrafficIpAddressType?: 'ipv4'|'ipv6'|'dual-stack'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
