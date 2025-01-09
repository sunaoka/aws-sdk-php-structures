<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalGatewayVirtualInterfaceId
 * @property string $LocalGatewayId
 * @property int $Vlan
 * @property string $LocalAddress
 * @property string $PeerAddress
 * @property int $LocalBgpAsn
 * @property int $PeerBgpAsn
 * @property string $OwnerId
 * @property list<Tag> $Tags
 */
class LocalGatewayVirtualInterface extends Shape
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceId?: string,
     *     LocalGatewayId?: string,
     *     Vlan?: int,
     *     LocalAddress?: string,
     *     PeerAddress?: string,
     *     LocalBgpAsn?: int,
     *     PeerBgpAsn?: int,
     *     OwnerId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
