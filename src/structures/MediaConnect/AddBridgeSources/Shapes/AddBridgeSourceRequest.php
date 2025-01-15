<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddBridgeFlowSourceRequest|null $FlowSource
 * @property AddBridgeNetworkSourceRequest|null $NetworkSource
 */
class AddBridgeSourceRequest extends Shape
{
    /**
     * @param array{
     *     FlowSource?: AddBridgeFlowSourceRequest|null,
     *     NetworkSource?: AddBridgeNetworkSourceRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
