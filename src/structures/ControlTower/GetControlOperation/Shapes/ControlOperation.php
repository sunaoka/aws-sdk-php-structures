<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetControlOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'ENABLE_CONTROL'|'DISABLE_CONTROL'|null $operationType
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null $status
 * @property string|null $statusMessage
 */
class ControlOperation extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     operationType?: 'ENABLE_CONTROL'|'DISABLE_CONTROL'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SUCCEEDED'|'FAILED'|'IN_PROGRESS'|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
