<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkAttachmentId
 * @property string|null $TransitGatewayAttachmentId
 * @property string|null $SegmentName
 * @property string|null $NetworkFunctionGroupName
 * @property string|null $EdgeLocation
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 */
class NetworkRouteDestination extends Shape
{
    /**
     * @param array{
     *     CoreNetworkAttachmentId?: string|null,
     *     TransitGatewayAttachmentId?: string|null,
     *     SegmentName?: string|null,
     *     NetworkFunctionGroupName?: string|null,
     *     EdgeLocation?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
