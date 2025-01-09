<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePrivateVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int $asn
 * @property int $mtu
 * @property string $authKey
 * @property string $amazonAddress
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property string $customerAddress
 * @property list<Tag> $tags
 */
class NewPrivateVirtualInterfaceAllocation extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn: int,
     *     mtu?: int,
     *     authKey?: string,
     *     amazonAddress?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     customerAddress?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
