<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTAINER_RUNTIME'|'ACCELERATED_COMPUTE'|'DAEMON'|null $type
 * @property 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property \Aws\Api\DateTimeResult|null $lastStatusChange
 */
class InstanceHealthCheckResult extends Shape
{
    /**
     * @param array{
     *     type?: 'CONTAINER_RUNTIME'|'ACCELERATED_COMPUTE'|'DAEMON'|null,
     *     status?: 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null,
     *     statusReason?: string|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     lastStatusChange?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
