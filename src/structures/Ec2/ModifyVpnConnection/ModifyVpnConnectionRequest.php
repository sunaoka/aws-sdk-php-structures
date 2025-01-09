<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string $TransitGatewayId
 * @property string $CustomerGatewayId
 * @property string $VpnGatewayId
 * @property bool $DryRun
 */
class ModifyVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     TransitGatewayId?: string,
     *     CustomerGatewayId?: string,
     *     VpnGatewayId?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
