<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamResourceDiscoveryId
 * @property string|null $Description
 * @property list<Shapes\AddIpamOperatingRegion>|null $AddOperatingRegions
 * @property list<Shapes\RemoveIpamOperatingRegion>|null $RemoveOperatingRegions
 * @property list<Shapes\AddIpamOrganizationalUnitExclusion>|null $AddOrganizationalUnitExclusions
 * @property list<Shapes\RemoveIpamOrganizationalUnitExclusion>|null $RemoveOrganizationalUnitExclusions
 */
class ModifyIpamResourceDiscoveryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamResourceDiscoveryId: string,
     *     Description?: string|null,
     *     AddOperatingRegions?: list<Shapes\AddIpamOperatingRegion>|null,
     *     RemoveOperatingRegions?: list<Shapes\RemoveIpamOperatingRegion>|null,
     *     AddOrganizationalUnitExclusions?: list<Shapes\AddIpamOrganizationalUnitExclusion>|null,
     *     RemoveOrganizationalUnitExclusions?: list<Shapes\RemoveIpamOrganizationalUnitExclusion>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
