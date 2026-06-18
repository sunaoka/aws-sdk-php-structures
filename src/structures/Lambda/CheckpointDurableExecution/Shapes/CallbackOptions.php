<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 99999999>|null $TimeoutSeconds
 * @property int<0, 99999999>|null $HeartbeatTimeoutSeconds
 */
class CallbackOptions extends Shape
{
    /**
     * @param array{
     *     TimeoutSeconds?: int<0, 99999999>|null,
     *     HeartbeatTimeoutSeconds?: int<0, 99999999>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
