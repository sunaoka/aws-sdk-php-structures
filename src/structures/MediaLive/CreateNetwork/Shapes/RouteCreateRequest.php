<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $Gateway
 */
class RouteCreateRequest extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     Gateway?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
