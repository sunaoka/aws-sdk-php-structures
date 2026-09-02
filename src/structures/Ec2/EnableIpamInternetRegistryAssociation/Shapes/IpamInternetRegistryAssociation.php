<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamInternetRegistryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string|null $IpamInternetRegistryAssociationId
 * @property string|null $IpamInternetRegistryAssociationArn
 * @property string|null $IpamId
 * @property string|null $IpamRegion
 * @property 'ripe'|'apnic'|'arin'|'lacnic'|null $Rir
 * @property string|null $OrganizationHandle
 * @property string|null $Description
 * @property 'pending-enable'|'create-in-progress'|'create-failed'|'enable-in-progress'|'enable-complete'|'enable-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null $State
 * @property string|null $StateMessage
 * @property string|null $ChildRequestXml
 * @property list<Tag>|null $Tags
 */
class IpamInternetRegistryAssociation extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     IpamInternetRegistryAssociationId?: string|null,
     *     IpamInternetRegistryAssociationArn?: string|null,
     *     IpamId?: string|null,
     *     IpamRegion?: string|null,
     *     Rir?: 'ripe'|'apnic'|'arin'|'lacnic'|null,
     *     OrganizationHandle?: string|null,
     *     Description?: string|null,
     *     State?: 'pending-enable'|'create-in-progress'|'create-failed'|'enable-in-progress'|'enable-complete'|'enable-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null,
     *     StateMessage?: string|null,
     *     ChildRequestXml?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
