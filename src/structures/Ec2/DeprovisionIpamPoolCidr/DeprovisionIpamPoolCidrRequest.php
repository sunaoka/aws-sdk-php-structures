<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $Cidr
 */
class DeprovisionIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Cidr?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
