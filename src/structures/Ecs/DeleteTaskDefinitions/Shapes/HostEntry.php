<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteTaskDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostname
 * @property string $ipAddress
 */
class HostEntry extends Shape
{
    /**
     * @param array{
     *     hostname: string,
     *     ipAddress: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
