<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxBitrate
 */
class AddEgressGatewayBridgeRequest extends Shape
{
    /**
     * @param array{MaxBitrate: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
