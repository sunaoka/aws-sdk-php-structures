<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnConnectionId
 * @property string|null $TransitGatewayId
 * @property string|null $CustomerGatewayId
 * @property string|null $VpnGatewayId
 * @property bool|null $DryRun
 */
class ModifyVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     VpnConnectionId: string,
     *     TransitGatewayId?: string|null,
     *     CustomerGatewayId?: string|null,
     *     VpnGatewayId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
