<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamId
 * @property string|null $IpamArn
 * @property string|null $IpamRegion
 * @property string|null $PublicDefaultScopeId
 * @property string|null $PrivateDefaultScopeId
 * @property int|null $ScopeCount
 * @property string|null $Description
 * @property list<IpamOperatingRegion>|null $OperatingRegions
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null $State
 * @property list<Tag>|null $Tags
 * @property string|null $DefaultResourceDiscoveryId
 * @property string|null $DefaultResourceDiscoveryAssociationId
 * @property int|null $ResourceDiscoveryAssociationCount
 * @property string|null $StateMessage
 * @property 'free'|'advanced'|null $Tier
 * @property bool|null $EnablePrivateGua
 */
class Ipam extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamId?: string|null,
     *     IpamArn?: string|null,
     *     IpamRegion?: string|null,
     *     PublicDefaultScopeId?: string|null,
     *     PrivateDefaultScopeId?: string|null,
     *     ScopeCount?: int|null,
     *     Description?: string|null,
     *     OperatingRegions?: list<IpamOperatingRegion>|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress'|null,
     *     Tags?: list<Tag>|null,
     *     DefaultResourceDiscoveryId?: string|null,
     *     DefaultResourceDiscoveryAssociationId?: string|null,
     *     ResourceDiscoveryAssociationCount?: int|null,
     *     StateMessage?: string|null,
     *     Tier?: 'free'|'advanced'|null,
     *     EnablePrivateGua?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
