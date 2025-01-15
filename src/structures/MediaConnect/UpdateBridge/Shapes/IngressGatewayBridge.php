<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property int $MaxBitrate
 * @property int $MaxOutputs
 */
class IngressGatewayBridge extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     MaxBitrate: int,
     *     MaxOutputs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
