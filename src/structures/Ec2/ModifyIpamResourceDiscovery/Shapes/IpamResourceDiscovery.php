<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $IpamResourceDiscoveryId
 * @property string $IpamResourceDiscoveryArn
 * @property string $IpamResourceDiscoveryRegion
 * @property string $Description
 * @property list<IpamOperatingRegion> $OperatingRegions
 * @property bool $IsDefault
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress' $State
 * @property list<Tag> $Tags
 * @property list<IpamOrganizationalUnitExclusion> $OrganizationalUnitExclusions
 */
class IpamResourceDiscovery extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     IpamResourceDiscoveryId?: string,
     *     IpamResourceDiscoveryArn?: string,
     *     IpamResourceDiscoveryRegion?: string,
     *     Description?: string,
     *     OperatingRegions?: list<IpamOperatingRegion>,
     *     IsDefault?: bool,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress',
     *     Tags?: list<Tag>,
     *     OrganizationalUnitExclusions?: list<IpamOrganizationalUnitExclusion>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
