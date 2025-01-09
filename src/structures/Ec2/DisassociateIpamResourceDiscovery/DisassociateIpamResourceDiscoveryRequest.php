<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamResourceDiscoveryAssociationId
 */
class DisassociateIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamResourceDiscoveryAssociationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
