<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $VpcPeeringConnectionId
 */
class DeleteVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     VpcPeeringConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
