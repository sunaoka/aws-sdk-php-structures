<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property int $MaxBitrate
 */
class EgressGatewayBridge extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     MaxBitrate: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
