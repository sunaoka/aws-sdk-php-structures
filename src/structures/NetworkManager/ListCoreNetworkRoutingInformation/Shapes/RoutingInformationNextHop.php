<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkRoutingInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property string|null $CoreNetworkAttachmentId
 * @property string|null $ResourceId
 * @property string|null $ResourceType
 * @property string|null $SegmentName
 * @property string|null $EdgeLocation
 */
class RoutingInformationNextHop extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     CoreNetworkAttachmentId?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: string|null,
     *     SegmentName?: string|null,
     *     EdgeLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
