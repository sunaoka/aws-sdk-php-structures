<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BridgeFlowSource $FlowSource
 * @property BridgeNetworkSource $NetworkSource
 */
class BridgeSource extends Shape
{
    /**
     * @param array{
     *     FlowSource?: BridgeFlowSource,
     *     NetworkSource?: BridgeNetworkSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
