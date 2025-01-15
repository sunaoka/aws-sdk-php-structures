<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTrunkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $BranchInterfaceId
 * @property string|null $TrunkInterfaceId
 * @property 'VLAN'|'GRE'|null $InterfaceProtocol
 * @property int|null $VlanId
 * @property int|null $GreKey
 * @property list<Tag>|null $Tags
 */
class TrunkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     BranchInterfaceId?: string|null,
     *     TrunkInterfaceId?: string|null,
     *     InterfaceProtocol?: 'VLAN'|'GRE'|null,
     *     VlanId?: int|null,
     *     GreKey?: int|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
