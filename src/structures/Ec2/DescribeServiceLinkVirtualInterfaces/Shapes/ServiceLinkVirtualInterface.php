<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeServiceLinkVirtualInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceLinkVirtualInterfaceId
 * @property string|null $ServiceLinkVirtualInterfaceArn
 * @property string|null $OutpostId
 * @property string|null $OutpostArn
 * @property string|null $OwnerId
 * @property string|null $LocalAddress
 * @property string|null $PeerAddress
 * @property int|null $PeerBgpAsn
 * @property int|null $Vlan
 * @property string|null $OutpostLagId
 * @property list<Tag>|null $Tags
 * @property 'pending'|'available'|'deleting'|'deleted'|null $ConfigurationState
 */
class ServiceLinkVirtualInterface extends Shape
{
    /**
     * @param array{
     *     ServiceLinkVirtualInterfaceId?: string|null,
     *     ServiceLinkVirtualInterfaceArn?: string|null,
     *     OutpostId?: string|null,
     *     OutpostArn?: string|null,
     *     OwnerId?: string|null,
     *     LocalAddress?: string|null,
     *     PeerAddress?: string|null,
     *     PeerBgpAsn?: int|null,
     *     Vlan?: int|null,
     *     OutpostLagId?: string|null,
     *     Tags?: list<Tag>|null,
     *     ConfigurationState?: 'pending'|'available'|'deleting'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
