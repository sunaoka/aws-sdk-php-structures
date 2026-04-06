<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationAddress
 * @property int<0, 65535> $DestinationPort
 */
class RistRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationAddress: string,
     *     DestinationPort: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
