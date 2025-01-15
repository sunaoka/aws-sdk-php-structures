<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxBitrate
 */
class UpdateEgressGatewayBridgeRequest extends Shape
{
    /**
     * @param array{MaxBitrate?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
