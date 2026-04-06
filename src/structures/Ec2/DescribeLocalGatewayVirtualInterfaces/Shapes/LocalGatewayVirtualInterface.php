<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalGatewayVirtualInterfaceId
 * @property string|null $LocalGatewayId
 * @property int|null $Vlan
 * @property string|null $LocalAddress
 * @property string|null $PeerAddress
 * @property int|null $LocalBgpAsn
 * @property int|null $PeerBgpAsn
 * @property string|null $OwnerId
 * @property list<Tag>|null $Tags
 */
class LocalGatewayVirtualInterface extends Shape
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceId?: string|null,
     *     LocalGatewayId?: string|null,
     *     Vlan?: int|null,
     *     LocalAddress?: string|null,
     *     PeerAddress?: string|null,
     *     LocalBgpAsn?: int|null,
     *     PeerBgpAsn?: int|null,
     *     OwnerId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
