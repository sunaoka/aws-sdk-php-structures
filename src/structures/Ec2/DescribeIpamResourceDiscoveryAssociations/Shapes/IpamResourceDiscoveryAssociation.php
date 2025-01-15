<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamResourceDiscoveryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamResourceDiscoveryAssociationId
 * @property string|null $IpamResourceDiscoveryAssociationArn
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $IpamId
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property bool|null $IsDefault
 * @property 'active'|'not-found'|null $ResourceDiscoveryStatus
 * @property 'associate-in-progress'|'associate-complete'|'associate-failed'|'disassociate-in-progress'|'disassociate-complete'|'disassociate-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 */
class IpamResourceDiscoveryAssociation extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamResourceDiscoveryAssociationId?: string|null,
     *     IpamResourceDiscoveryAssociationArn?: string|null,
     *     IpamResourceDiscoveryId?: string|null,
     *     IpamId?: string|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     IsDefault?: bool|null,
     *     ResourceDiscoveryStatus?: 'active'|'not-found'|null,
     *     State?: 'associate-in-progress'|'associate-complete'|'associate-failed'|'disassociate-in-progress'|'disassociate-complete'|'disassociate-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
