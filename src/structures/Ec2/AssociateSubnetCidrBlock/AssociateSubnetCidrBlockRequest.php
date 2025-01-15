<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSubnetCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Ipv6IpamPoolId
 * @property int|null $Ipv6NetmaskLength
 * @property string $SubnetId
 * @property string|null $Ipv6CidrBlock
 */
class AssociateSubnetCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     Ipv6IpamPoolId?: string|null,
     *     Ipv6NetmaskLength?: int|null,
     *     SubnetId: string,
     *     Ipv6CidrBlock?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
