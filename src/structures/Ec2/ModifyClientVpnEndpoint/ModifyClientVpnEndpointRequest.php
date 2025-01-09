<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string $ServerCertificateArn
 * @property Shapes\ConnectionLogOptions $ConnectionLogOptions
 * @property Shapes\DnsServersOptionsModifyStructure $DnsServers
 * @property int $VpnPort
 * @property string $Description
 * @property bool $SplitTunnel
 * @property bool $DryRun
 * @property list<string> $SecurityGroupIds
 * @property string $VpcId
 * @property 'enabled'|'disabled' $SelfServicePortal
 * @property Shapes\ClientConnectOptions $ClientConnectOptions
 * @property int $SessionTimeoutHours
 * @property Shapes\ClientLoginBannerOptions $ClientLoginBannerOptions
 */
class ModifyClientVpnEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     ServerCertificateArn?: string,
     *     ConnectionLogOptions?: Shapes\ConnectionLogOptions,
     *     DnsServers?: Shapes\DnsServersOptionsModifyStructure,
     *     VpnPort?: int,
     *     Description?: string,
     *     SplitTunnel?: bool,
     *     DryRun?: bool,
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
