<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddBridgeFlowSourceRequest $FlowSource
 * @property AddBridgeNetworkSourceRequest $NetworkSource
 */
class AddBridgeSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowSource?: AddBridgeFlowSourceRequest,
     *     NetworkSource?: AddBridgeNetworkSourceRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
