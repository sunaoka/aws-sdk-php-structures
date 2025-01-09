<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $Description
 * @property list<Shapes\AddIpamOperatingRegion> $OperatingRegions
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 */
class CreateIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Description?: string,
     *     OperatingRegions?: list<Shapes\AddIpamOperatingRegion>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
