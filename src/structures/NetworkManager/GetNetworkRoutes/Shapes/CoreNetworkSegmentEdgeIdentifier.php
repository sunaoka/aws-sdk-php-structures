<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CoreNetworkId
 * @property string|null $SegmentName
 * @property string|null $EdgeLocation
 */
class CoreNetworkSegmentEdgeIdentifier extends Shape
{
    /**
     * @param array{
     *     CoreNetworkId?: string|null,
     *     SegmentName?: string|null,
     *     EdgeLocation?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
