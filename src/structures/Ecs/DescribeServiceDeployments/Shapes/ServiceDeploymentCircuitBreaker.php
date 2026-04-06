<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null $status
 * @property int|null $failureCount
 * @property int|null $threshold
 */
class ServiceDeploymentCircuitBreaker extends Shape
{
    /**
     * @param array{
     *     status?: 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null,
     *     failureCount?: int|null,
     *     threshold?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
