<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePrivateVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int|null $asn
 * @property int|null $asnLong
 * @property int|null $mtu
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property string|null $customerAddress
 * @property list<Tag>|null $tags
 */
class NewPrivateVirtualInterfaceAllocation extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn?: int|null,
     *     asnLong?: int|null,
     *     mtu?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     customerAddress?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
