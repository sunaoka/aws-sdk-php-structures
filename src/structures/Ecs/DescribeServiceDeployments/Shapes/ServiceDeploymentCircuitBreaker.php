<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED' $status
 * @property int $failureCount
 * @property int $threshold
 */
class ServiceDeploymentCircuitBreaker extends Shape
{
    /**
     * @param array{
     *     status?: 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED',
     *     failureCount?: int,
     *     threshold?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
