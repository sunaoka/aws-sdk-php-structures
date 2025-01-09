<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $port
 */
class SocketAddress extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
