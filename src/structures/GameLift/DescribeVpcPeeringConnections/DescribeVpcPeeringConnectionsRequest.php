<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 */
class DescribeVpcPeeringConnectionsRequest extends Request
{
    /**
     * @param array{FleetId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
