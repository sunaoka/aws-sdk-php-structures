<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $IpamId
 * @property string $IpamArn
 * @property string $IpamRegion
 * @property string $PublicDefaultScopeId
 * @property string $PrivateDefaultScopeId
 * @property int $ScopeCount
 * @property string $Description
 * @property list<IpamOperatingRegion> $OperatingRegions
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress' $State
 * @property list<Tag> $Tags
 * @property string $DefaultResourceDiscoveryId
 * @property string $DefaultResourceDiscoveryAssociationId
 * @property int $ResourceDiscoveryAssociationCount
 * @property string $StateMessage
 * @property 'free'|'advanced' $Tier
 * @property bool $EnablePrivateGua
 */
class Ipam extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     IpamId?: string,
     *     IpamArn?: string,
     *     IpamRegion?: string,
     *     PublicDefaultScopeId?: string,
     *     PrivateDefaultScopeId?: string,
     *     ScopeCount?: int,
     *     Description?: string,
     *     OperatingRegions?: list<IpamOperatingRegion>,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'modify-in-progress'|'modify-complete'|'modify-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|'isolate-in-progress'|'isolate-complete'|'restore-in-progress',
     *     Tags?: list<Tag>,
     *     DefaultResourceDiscoveryId?: string,
     *     DefaultResourceDiscoveryAssociationId?: string,
     *     ResourceDiscoveryAssociationCount?: int,
     *     StateMessage?: string,
     *     Tier?: 'free'|'advanced',
     *     EnablePrivateGua?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
