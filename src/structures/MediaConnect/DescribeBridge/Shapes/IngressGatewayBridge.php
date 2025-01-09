<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property int $MaxBitrate
 * @property int $MaxOutputs
 */
class IngressGatewayBridge extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     MaxBitrate: int,
     *     MaxOutputs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
