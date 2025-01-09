<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocateTransitVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int $asn
 * @property int $mtu
 * @property string $authKey
 * @property string $amazonAddress
 * @property string $customerAddress
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property list<Tag> $tags
 */
class NewTransitVirtualInterfaceAllocation extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName?: string,
     *     vlan?: int,
     *     asn?: int,
     *     mtu?: int,
     *     authKey?: string,
     *     amazonAddress?: string,
     *     customerAddress?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
