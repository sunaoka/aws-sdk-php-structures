<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONTAINER_RUNTIME' $type
 * @property 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING' $status
 * @property \Aws\Api\DateTimeResult $lastUpdated
 * @property \Aws\Api\DateTimeResult $lastStatusChange
 */
class InstanceHealthCheckResult extends Shape
{
    /**
     * @param array{
     *     type?: 'CONTAINER_RUNTIME',
     *     status?: 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING',
     *     lastUpdated?: \Aws\Api\DateTimeResult,
     *     lastStatusChange?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
