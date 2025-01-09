<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxBitrate
 * @property int $MaxOutputs
 */
class UpdateIngressGatewayBridgeRequest extends Shape
{
    /**
     * @param array{
     *     MaxBitrate?: int,
     *     MaxOutputs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
