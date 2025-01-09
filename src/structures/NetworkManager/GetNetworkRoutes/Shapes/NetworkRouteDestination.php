<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkAttachmentId
 * @property string $TransitGatewayAttachmentId
 * @property string $SegmentName
 * @property string $NetworkFunctionGroupName
 * @property string $EdgeLocation
 * @property string $ResourceType
 * @property string $ResourceId
 */
class NetworkRouteDestination extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAttachmentId?: string,
     *     TransitGatewayAttachmentId?: string,
     *     SegmentName?: string,
     *     NetworkFunctionGroupName?: string,
     *     EdgeLocation?: string,
     *     ResourceType?: string,
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
