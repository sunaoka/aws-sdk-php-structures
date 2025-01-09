<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpnConnectionRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationCidrBlock
 * @property string $VpnConnectionId
 */
class DeleteVpnConnectionRouteRequest extends Request
{
    /**
     * @param array{
     *     DestinationCidrBlock: string,
     *     VpnConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
