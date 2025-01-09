<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientCidrBlock
 * @property string $ServerCertificateArn
 * @property list<Shapes\ClientVpnAuthenticationRequest> $AuthenticationOptions
 * @property Shapes\ConnectionLogOptions $ConnectionLogOptions
 * @property list<string> $DnsServers
 * @property 'tcp'|'udp' $TransportProtocol
 * @property int $VpnPort
 * @property string $Description
 * @property bool $SplitTunnel
 * @property bool $DryRun
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property list<string> $SecurityGroupIds
 * @property string $VpcId
 * @property 'enabled'|'disabled' $SelfServicePortal
 * @property Shapes\ClientConnectOptions $ClientConnectOptions
 * @property int $SessionTimeoutHours
 * @property Shapes\ClientLoginBannerOptions $ClientLoginBannerOptions
 */
class CreateClientVpnEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClientCidrBlock: string,
     *     ServerCertificateArn: string,
     *     AuthenticationOptions: list<Shapes\ClientVpnAuthenticationRequest>,
     *     ConnectionLogOptions: Shapes\ConnectionLogOptions,
     *     DnsServers?: list<string>,
     *     TransportProtocol?: 'tcp'|'udp',
     *     VpnPort?: int,
     *     Description?: string,
     *     SplitTunnel?: bool,
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     SecurityGroupIds?: list<string>,
     *     VpcId?: string,
     *     SelfServicePortal?: 'enabled'|'disabled',
     *     ClientConnectOptions?: Shapes\ClientConnectOptions,
     *     SessionTimeoutHours?: int,
     *     ClientLoginBannerOptions?: Shapes\ClientLoginBannerOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
