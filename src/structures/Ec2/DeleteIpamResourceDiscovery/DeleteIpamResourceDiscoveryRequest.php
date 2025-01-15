<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamResourceDiscoveryId
 */
class DeleteIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamResourceDiscoveryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
