<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property string|null $IpV4CidrBlock
 * @property string|null $VpcPeeringConnectionId
 * @property VpcPeeringConnectionStatus|null $Status
 * @property string|null $PeerVpcId
 * @property string|null $GameLiftVpcId
 */
class VpcPeeringConnection extends Shape
{
    /**
     * @param array{
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     IpV4CidrBlock?: string|null,
     *     VpcPeeringConnectionId?: string|null,
     *     Status?: VpcPeeringConnectionStatus|null,
     *     PeerVpcId?: string|null,
     *     GameLiftVpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
