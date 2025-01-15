<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddBridgeNetworkOutputRequest|null $NetworkOutput
 */
class AddBridgeOutputRequest extends Shape
{
    /**
     * @param array{NetworkOutput?: AddBridgeNetworkOutputRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
