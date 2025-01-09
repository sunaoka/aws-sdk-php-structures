<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $PeerVpcAwsAccountId
 * @property string $PeerVpcId
 */
class CreateVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     PeerVpcAwsAccountId: string,
     *     PeerVpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
