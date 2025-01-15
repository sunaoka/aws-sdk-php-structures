<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null $overallStatus
 * @property list<InstanceHealthCheckResult>|null $details
 */
class ContainerInstanceHealthStatus extends Shape
{
    /**
     * @param array{
     *     overallStatus?: 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING'|null,
     *     details?: list<InstanceHealthCheckResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
