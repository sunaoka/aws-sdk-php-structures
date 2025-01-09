<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateIpamResourceDiscovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $IpamResourceDiscoveryAssociationId
 * @property string $IpamResourceDiscoveryAssociationArn
 * @property string $IpamResourceDiscoveryId
 * @property string $IpamId
 * @property string $IpamArn
 * @property string $IpamRegion
 * @property bool $IsDefault
 * @property 'active'|'not-found' $ResourceDiscoveryStatus
 * @property 'associate-in-progress'|'associate-complete'|'associate-failed'|'disassociate-in-progress'|'disassociate-complete'|'disassociate-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress' $State
 * @property list<Tag> $Tags
 */
class IpamResourceDiscoveryAssociation extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     IpamResourceDiscoveryAssociationId?: string,
     *     IpamResourceDiscoveryAssociationArn?: string,
     *     IpamResourceDiscoveryId?: string,
     *     IpamId?: string,
     *     IpamArn?: string,
     *     IpamRegion?: string,
     *     IsDefault?: bool,
     *     ResourceDiscoveryStatus?: 'active'|'not-found',
     *     State?: 'associate-in-progress'|'associate-complete'|'associate-failed'|'disassociate-in-progress'|'disassociate-complete'|'disassociate-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
