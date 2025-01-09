<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property list<Ipv6CidrBlock> $Ipv6CidrBlockSet
 * @property list<CidrBlock> $CidrBlockSet
 * @property string $OwnerId
 * @property VpcPeeringConnectionOptionsDescription $PeeringOptions
 * @property string $VpcId
 * @property string $Region
 */
class VpcPeeringConnectionVpcInfo extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     Ipv6CidrBlockSet?: list<Ipv6CidrBlock>,
     *     CidrBlockSet?: list<CidrBlock>,
     *     OwnerId?: string,
     *     PeeringOptions?: VpcPeeringConnectionOptionsDescription,
     *     VpcId?: string,
     *     Region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
