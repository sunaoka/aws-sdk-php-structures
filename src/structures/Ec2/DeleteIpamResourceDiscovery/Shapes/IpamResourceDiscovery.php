<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $IpamResourceDiscoveryArn
 * @property string|null $IpamResourceDiscoveryRegion
 * @property string|null $Description
 * @property list<IpamOperatingRegion>|null $OperatingRegions
 * @property bool|null $IsDefault
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 * @property list<IpamOrganizationalUnitExclusion>|null $OrganizationalUnitExclusions
 */
class IpamResourceDiscovery extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamResourceDiscoveryId?: string|null,
     *     IpamResourceDiscoveryArn?: string|null,
     *     IpamResourceDiscoveryRegion?: string|null,
     *     Description?: string|null,
     *     OperatingRegions?: list<IpamOperatingRegion>|null,
     *     IsDefault?: bool|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null,
     *     OrganizationalUnitExclusions?: list<IpamOrganizationalUnitExclusion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
