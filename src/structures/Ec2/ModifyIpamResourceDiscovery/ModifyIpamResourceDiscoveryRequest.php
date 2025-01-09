<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamResourceDiscoveryId
 * @property string $Description
 * @property list<Shapes\AddIpamOperatingRegion> $AddOperatingRegions
 * @property list<Shapes\RemoveIpamOperatingRegion> $RemoveOperatingRegions
 * @property list<Shapes\AddIpamOrganizationalUnitExclusion> $AddOrganizationalUnitExclusions
 * @property list<Shapes\RemoveIpamOrganizationalUnitExclusion> $RemoveOrganizationalUnitExclusions
 */
class ModifyIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamResourceDiscoveryId: string,
     *     Description?: string,
     *     AddOperatingRegions?: list<Shapes\AddIpamOperatingRegion>,
     *     RemoveOperatingRegions?: list<Shapes\RemoveIpamOperatingRegion>,
     *     AddOrganizationalUnitExclusions?: list<Shapes\AddIpamOrganizationalUnitExclusion>,
     *     RemoveOrganizationalUnitExclusions?: list<Shapes\RemoveIpamOrganizationalUnitExclusion>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
