<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property int $MaxBitrate
 */
class EgressGatewayBridge extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     MaxBitrate: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
