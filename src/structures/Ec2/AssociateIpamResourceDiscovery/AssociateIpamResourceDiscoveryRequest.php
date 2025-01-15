<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property string $IpamResourceDiscoveryId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class AssociateIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     IpamResourceDiscoveryId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
