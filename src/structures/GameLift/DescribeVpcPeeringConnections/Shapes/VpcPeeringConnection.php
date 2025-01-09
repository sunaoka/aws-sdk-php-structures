<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FleetId
 * @property string $FleetArn
 * @property string $IpV4CidrBlock
 * @property string $VpcPeeringConnectionId
 * @property VpcPeeringConnectionStatus $Status
 * @property string $PeerVpcId
 * @property string $GameLiftVpcId
 */
class VpcPeeringConnection extends Shape
{
    /**
     * @param array{
     *     FleetId?: string,
     *     FleetArn?: string,
     *     IpV4CidrBlock?: string,
     *     VpcPeeringConnectionId?: string,
     *     Status?: VpcPeeringConnectionStatus,
     *     PeerVpcId?: string,
     *     GameLiftVpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
