<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property string $IpamResourceDiscoveryId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class AssociateIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     IpamResourceDiscoveryId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
