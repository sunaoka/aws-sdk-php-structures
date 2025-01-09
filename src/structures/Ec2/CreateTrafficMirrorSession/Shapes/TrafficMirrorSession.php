<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficMirrorSessionId
 * @property string $TrafficMirrorTargetId
 * @property string $TrafficMirrorFilterId
 * @property string $NetworkInterfaceId
 * @property string $OwnerId
 * @property int $PacketLength
 * @property int $SessionNumber
 * @property int $VirtualNetworkId
 * @property string $Description
 * @property list<Tag> $Tags
 */
class TrafficMirrorSession extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorSessionId?: string,
     *     TrafficMirrorTargetId?: string,
     *     TrafficMirrorFilterId?: string,
     *     NetworkInterfaceId?: string,
     *     OwnerId?: string,
     *     PacketLength?: int,
     *     SessionNumber?: int,
     *     VirtualNetworkId?: int,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
