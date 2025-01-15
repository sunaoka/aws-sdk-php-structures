<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 * @property list<Ipv6CidrBlock>|null $Ipv6CidrBlockSet
 * @property list<CidrBlock>|null $CidrBlockSet
 * @property string|null $OwnerId
 * @property VpcPeeringConnectionOptionsDescription|null $PeeringOptions
 * @property string|null $VpcId
 * @property string|null $Region
 */
class VpcPeeringConnectionVpcInfo extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     Ipv6CidrBlockSet?: list<Ipv6CidrBlock>|null,
     *     CidrBlockSet?: list<CidrBlock>|null,
     *     OwnerId?: string|null,
     *     PeeringOptions?: VpcPeeringConnectionOptionsDescription|null,
     *     VpcId?: string|null,
     *     Region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
