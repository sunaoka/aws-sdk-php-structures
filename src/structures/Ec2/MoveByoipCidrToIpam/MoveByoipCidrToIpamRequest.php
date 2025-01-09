<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveByoipCidrToIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Cidr
 * @property string $IpamPoolId
 * @property string $IpamPoolOwner
 */
class MoveByoipCidrToIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Cidr: string,
     *     IpamPoolId: string,
     *     IpamPoolOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
