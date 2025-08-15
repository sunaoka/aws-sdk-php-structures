<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateTransitVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $virtualInterfaceName
 * @property int|null $vlan
 * @property int|null $asn
 * @property int|null $asnLong
 * @property int|null $mtu
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property string|null $directConnectGatewayId
 * @property list<Tag>|null $tags
 * @property bool|null $enableSiteLink
 */
class NewTransitVirtualInterface extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName?: string|null,
     *     vlan?: int|null,
     *     asn?: int|null,
     *     asnLong?: int|null,
     *     mtu?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     directConnectGatewayId?: string|null,
     *     tags?: list<Tag>|null,
     *     enableSiteLink?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
