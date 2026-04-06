<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerInstancesState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTAINER_RUNTIME'|null $type
 * @property 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdated
 * @property \Aws\Api\DateTimeResult|null $lastStatusChange
 */
class InstanceHealthCheckResult extends Shape
{
    /**
     * @param array{
     *     type?: 'CONTAINER_RUNTIME'|null,
     *     status?: 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null,
     *     lastUpdated?: \Aws\Api\DateTimeResult|null,
     *     lastStatusChange?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
