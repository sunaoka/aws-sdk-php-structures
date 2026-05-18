<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamPoolAllocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolAllocationId
 * @property string|null $Description
 */
class ModifyIpamPoolAllocationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolAllocationId: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
