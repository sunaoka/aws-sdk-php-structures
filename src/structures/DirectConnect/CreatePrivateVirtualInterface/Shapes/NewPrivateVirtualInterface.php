<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePrivateVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int $asn
 * @property int|null $mtu
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property string|null $virtualGatewayId
 * @property string|null $directConnectGatewayId
 * @property list<Tag>|null $tags
 * @property bool|null $enableSiteLink
 */
class NewPrivateVirtualInterface extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn: int,
     *     mtu?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     virtualGatewayId?: string|null,
     *     directConnectGatewayId?: string|null,
     *     tags?: list<Tag>|null,
     *     enableSiteLink?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
