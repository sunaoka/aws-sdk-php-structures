<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateTransitVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $virtualInterfaceName
 * @property int|null $vlan
 * @property int|null $asn
 * @property int|null $mtu
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property list<Tag>|null $tags
 */
class NewTransitVirtualInterfaceAllocation extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName?: string|null,
     *     vlan?: int|null,
     *     asn?: int|null,
     *     mtu?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
