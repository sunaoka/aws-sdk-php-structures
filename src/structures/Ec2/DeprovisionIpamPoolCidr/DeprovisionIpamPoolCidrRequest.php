<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string|null $Cidr
 */
class DeprovisionIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     Cidr?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
