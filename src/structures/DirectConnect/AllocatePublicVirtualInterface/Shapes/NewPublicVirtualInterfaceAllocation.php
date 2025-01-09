<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AllocatePublicVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int $asn
 * @property string $authKey
 * @property string $amazonAddress
 * @property string $customerAddress
 * @property 'ipv4'|'ipv6' $addressFamily
 * @property list<RouteFilterPrefix> $routeFilterPrefixes
 * @property list<Tag> $tags
 */
class NewPublicVirtualInterfaceAllocation extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn: int,
     *     authKey?: string,
     *     amazonAddress?: string,
     *     customerAddress?: string,
     *     addressFamily?: 'ipv4'|'ipv6',
     *     routeFilterPrefixes?: list<RouteFilterPrefix>,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
