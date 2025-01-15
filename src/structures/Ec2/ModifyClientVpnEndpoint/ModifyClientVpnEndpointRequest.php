<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property string|null $ServerCertificateArn
 * @property Shapes\ConnectionLogOptions|null $ConnectionLogOptions
 * @property Shapes\DnsServersOptionsModifyStructure|null $DnsServers
 * @property int|null $VpnPort
 * @property string|null $Description
 * @property bool|null $SplitTunnel
 * @property bool|null $DryRun
 * @property list<string>|null $SecurityGroupIds
 * @property string|null $VpcId
 * @property 'enabled'|'disabled'|null $SelfServicePortal
 * @property Shapes\ClientConnectOptions|null $ClientConnectOptions
 * @property int|null $SessionTimeoutHours
 * @property Shapes\ClientLoginBannerOptions|null $ClientLoginBannerOptions
 * @property bool|null $DisconnectOnSessionTimeout
 */
class ModifyClientVpnEndpointRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     ServerCertificateArn?: string|null,
     *     ConnectionLogOptions?: Shapes\ConnectionLogOptions|null,
     *     DnsServers?: Shapes\DnsServersOptionsModifyStructure|null,
     *     VpnPort?: int|null,
     *     Description?: string|null,
     *     SplitTunnel?: bool|null,
     *     DryRun?: bool|null,
     *     SecurityGroupIds?: list<string>|null,
     *     VpcId?: string|null,
     *     SelfServicePortal?: 'enabled'|'disabled'|null,
     *     ClientConnectOptions?: Shapes\ClientConnectOptions|null,
     *     SessionTimeoutHours?: int|null,
     *     ClientLoginBannerOptions?: Shapes\ClientLoginBannerOptions|null,
     *     DisconnectOnSessionTimeout?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
