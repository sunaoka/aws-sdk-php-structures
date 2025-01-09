<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $idleTimeoutSeconds
 * @property int<0, 2147483647> $perRequestTimeoutSeconds
 */
class TimeoutConfiguration extends Shape
{
    /**
     * @param array{
     *     idleTimeoutSeconds?: int<0, 2147483647>,
     *     perRequestTimeoutSeconds?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
