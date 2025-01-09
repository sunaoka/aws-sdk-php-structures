<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachVpnGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 * @property string $VpnGatewayId
 * @property bool $DryRun
 */
class AttachVpnGatewayRequest extends Request
{
    /**
     * @param array{
     *     VpcId: string,
     *     VpnGatewayId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
