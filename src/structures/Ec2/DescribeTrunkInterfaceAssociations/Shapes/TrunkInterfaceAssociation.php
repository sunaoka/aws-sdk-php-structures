<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrunkInterfaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $BranchInterfaceId
 * @property string $TrunkInterfaceId
 * @property 'VLAN'|'GRE' $InterfaceProtocol
 * @property int $VlanId
 * @property int $GreKey
 * @property list<Tag> $Tags
 */
class TrunkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     BranchInterfaceId?: string,
     *     TrunkInterfaceId?: string,
     *     InterfaceProtocol?: 'VLAN'|'GRE',
     *     VlanId?: int,
     *     GreKey?: int,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
