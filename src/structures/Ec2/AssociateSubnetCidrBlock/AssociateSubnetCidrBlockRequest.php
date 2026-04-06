<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateSubnetCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ipv6CidrBlock
 * @property string $SubnetId
 */
class AssociateSubnetCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     Ipv6CidrBlock: string,
     *     SubnetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
