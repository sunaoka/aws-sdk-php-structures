<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnGatewayId
 * @property bool $DryRun
 */
class DeleteVpnGatewayRequest extends Request
{
    /**
     * @param array{
     *     VpnGatewayId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
