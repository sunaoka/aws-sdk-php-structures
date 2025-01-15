<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FleetId
 */
class DescribeVpcPeeringConnectionsRequest extends Request
{
    /**
     * @param array{FleetId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
