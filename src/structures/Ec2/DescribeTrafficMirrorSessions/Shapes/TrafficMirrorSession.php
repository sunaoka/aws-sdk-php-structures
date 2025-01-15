<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrafficMirrorSessionId
 * @property string|null $TrafficMirrorTargetId
 * @property string|null $TrafficMirrorFilterId
 * @property string|null $NetworkInterfaceId
 * @property string|null $OwnerId
 * @property int|null $PacketLength
 * @property int|null $SessionNumber
 * @property int|null $VirtualNetworkId
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class TrafficMirrorSession extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorSessionId?: string|null,
     *     TrafficMirrorTargetId?: string|null,
     *     TrafficMirrorFilterId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     OwnerId?: string|null,
     *     PacketLength?: int|null,
     *     SessionNumber?: int|null,
     *     VirtualNetworkId?: int|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
