<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationIpAddress
 */
class StandardRouterOutputStreamDetails extends Shape
{
    /**
     * @param array{DestinationIpAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
