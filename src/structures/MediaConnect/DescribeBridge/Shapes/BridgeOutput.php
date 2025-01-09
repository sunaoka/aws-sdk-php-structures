<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BridgeFlowOutput $FlowOutput
 * @property BridgeNetworkOutput $NetworkOutput
 */
class BridgeOutput extends Shape
{
    /**
     * @param array{
     *     FlowOutput?: BridgeFlowOutput,
     *     NetworkOutput?: BridgeNetworkOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
