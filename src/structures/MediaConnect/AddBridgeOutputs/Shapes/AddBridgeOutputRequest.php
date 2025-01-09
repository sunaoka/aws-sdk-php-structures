<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeOutputs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddBridgeNetworkOutputRequest $NetworkOutput
 */
class AddBridgeOutputRequest extends Shape
{
    /**
     * @param array{NetworkOutput?: AddBridgeNetworkOutputRequest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
