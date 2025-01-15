<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Gateway
 */
class Route extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Gateway?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
