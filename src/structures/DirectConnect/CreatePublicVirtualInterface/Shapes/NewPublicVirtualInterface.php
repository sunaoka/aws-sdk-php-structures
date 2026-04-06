<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreatePublicVirtualInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualInterfaceName
 * @property int $vlan
 * @property int|null $asn
 * @property int|null $asnLong
 * @property string|null $authKey
 * @property string|null $amazonAddress
 * @property string|null $customerAddress
 * @property 'ipv4'|'ipv6'|null $addressFamily
 * @property list<RouteFilterPrefix>|null $routeFilterPrefixes
 * @property list<Tag>|null $tags
 */
class NewPublicVirtualInterface extends Shape
{
    /**
     * @param array{
     *     virtualInterfaceName: string,
     *     vlan: int,
     *     asn?: int|null,
     *     asnLong?: int|null,
     *     authKey?: string|null,
     *     amazonAddress?: string|null,
     *     customerAddress?: string|null,
     *     addressFamily?: 'ipv4'|'ipv6'|null,
     *     routeFilterPrefixes?: list<RouteFilterPrefix>|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
