<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePrivateVirtualInterface\Shapes;

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
 * @property string $virtualGatewayId
 * @property string $directConnectGatewayId
 * @property list<Tag> $tags
 * @property bool $enableSiteLink
 */
class NewPrivateVirtualInterface extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn: int,
     *     mtu?: int,
     *     authKey?: string,
     *     amazonAddress?: string,
     *     customerAddress?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     virtualGatewayId?: string,
     *     directConnectGatewayId?: string,
     *     tags?: list<Tag>,
     *     enableSiteLink?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
