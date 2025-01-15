<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BridgeFlowOutput|null $FlowOutput
 * @property BridgeNetworkOutput|null $NetworkOutput
 */
class BridgeOutput extends Shape
{
    /**
     * @param array{
     *     FlowOutput?: BridgeFlowOutput|null,
     *     NetworkOutput?: BridgeNetworkOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
