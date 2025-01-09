<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING' $overallStatus
 * @property list<InstanceHealthCheckResult> $details
 */
class ContainerInstanceHealthStatus extends Shape
{
    /**
     * @param array{
     *     overallStatus?: 'OK'|'IMPAIRED'|'INSUFFICIENT_DATA'|'INITIALIZING',
     *     details?: list<InstanceHealthCheckResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
