<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CoreNetworkId
 * @property string $SegmentName
 * @property string $EdgeLocation
 */
class CoreNetworkSegmentEdgeIdentifier extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string,
     *     SegmentName?: string,
     *     EdgeLocation?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
