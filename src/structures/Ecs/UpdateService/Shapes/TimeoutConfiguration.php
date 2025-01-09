<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $idleTimeoutSeconds
 * @property int $perRequestTimeoutSeconds
 */
class TimeoutConfiguration extends Shape
{
    /**
     * @param array{
     *     idleTimeoutSeconds?: int,
     *     perRequestTimeoutSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
