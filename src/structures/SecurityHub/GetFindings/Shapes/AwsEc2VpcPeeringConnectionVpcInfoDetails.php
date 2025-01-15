<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 * @property list<VpcInfoCidrBlockSetDetails>|null $CidrBlockSet
 * @property list<VpcInfoIpv6CidrBlockSetDetails>|null $Ipv6CidrBlockSet
 * @property string|null $OwnerId
 * @property VpcInfoPeeringOptionsDetails|null $PeeringOptions
 * @property string|null $Region
 * @property string|null $VpcId
 */
class AwsEc2VpcPeeringConnectionVpcInfoDetails extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     CidrBlockSet?: list<VpcInfoCidrBlockSetDetails>|null,
     *     Ipv6CidrBlockSet?: list<VpcInfoIpv6CidrBlockSetDetails>|null,
     *     OwnerId?: string|null,
     *     PeeringOptions?: VpcInfoPeeringOptionsDetails|null,
     *     Region?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
