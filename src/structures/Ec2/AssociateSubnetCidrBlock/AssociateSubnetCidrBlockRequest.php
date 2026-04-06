<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSubnetCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Ipv6CidrBlock
 * @property string $SubnetId
 * @property string|null $Ipv6IpamPoolId
 * @property int|null $Ipv6NetmaskLength
 */
class AssociateSubnetCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     Ipv6CidrBlock?: string|null,
     *     SubnetId: string,
     *     Ipv6IpamPoolId?: string|null,
     *     Ipv6NetmaskLength?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
