<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseIpamPoolAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $Cidr
 * @property string $IpamPoolAllocationId
 */
class ReleaseIpamPoolAllocationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Cidr: string,
     *     IpamPoolAllocationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
