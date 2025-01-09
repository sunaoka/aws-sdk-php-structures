<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property list<VpcInfoCidrBlockSetDetails> $CidrBlockSet
 * @property list<VpcInfoIpv6CidrBlockSetDetails> $Ipv6CidrBlockSet
 * @property string $OwnerId
 * @property VpcInfoPeeringOptionsDetails $PeeringOptions
 * @property string $Region
 * @property string $VpcId
 */
class AwsEc2VpcPeeringConnectionVpcInfoDetails extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     CidrBlockSet?: list<VpcInfoCidrBlockSetDetails>,
     *     Ipv6CidrBlockSet?: list<VpcInfoIpv6CidrBlockSetDetails>,
     *     OwnerId?: string,
     *     PeeringOptions?: VpcInfoPeeringOptionsDetails,
     *     Region?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
