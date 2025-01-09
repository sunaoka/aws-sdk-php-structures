<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxBitrate
 */
class UpdateEgressGatewayBridgeRequest extends Shape
{
    /**
     * @param array{MaxBitrate?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
