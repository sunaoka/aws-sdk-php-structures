<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BridgeFlowSource|null $FlowSource
 * @property BridgeNetworkSource|null $NetworkSource
 */
class BridgeSource extends Shape
{
    /**
     * @param array{
     *     FlowSource?: BridgeFlowSource|null,
     *     NetworkSource?: BridgeNetworkSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
