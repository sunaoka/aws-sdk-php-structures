<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxBitrate
 * @property int|null $MaxOutputs
 */
class UpdateIngressGatewayBridgeRequest extends Shape
{
    /**
     * @param array{
     *     MaxBitrate?: int|null,
     *     MaxOutputs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
