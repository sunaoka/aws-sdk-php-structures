<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpnGatewayId
 * @property bool|null $DryRun
 */
class DeleteVpnGatewayRequest extends Request
{
    /**
     * @param array{
     *     VpnGatewayId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
