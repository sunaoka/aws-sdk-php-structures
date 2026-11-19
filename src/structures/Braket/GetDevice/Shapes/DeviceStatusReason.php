<?php

namespace Sunaoka\Aws\Structures\Braket\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OUTSIDE_AVAILABILITY_WINDOW'|'MAINTENANCE'|'RESERVATION' $reason
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $estimatedEndAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DeviceStatusReason extends Shape
{
    /**
     * @param array{
     *     reason: 'OUTSIDE_AVAILABILITY_WINDOW'|'MAINTENANCE'|'RESERVATION',
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     estimatedEndAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
