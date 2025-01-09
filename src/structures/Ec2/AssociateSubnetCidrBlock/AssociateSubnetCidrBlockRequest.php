<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSubnetCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ipv6IpamPoolId
 * @property int $Ipv6NetmaskLength
 * @property string $SubnetId
 * @property string $Ipv6CidrBlock
 */
class AssociateSubnetCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     Ipv6IpamPoolId?: string,
     *     Ipv6NetmaskLength?: int,
     *     SubnetId: string,
     *     Ipv6CidrBlock?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
