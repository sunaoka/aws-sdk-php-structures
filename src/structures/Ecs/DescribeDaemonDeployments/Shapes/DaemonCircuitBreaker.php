<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $failureCount
 * @property 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null $status
 * @property int|null $threshold
 */
class DaemonCircuitBreaker extends Shape
{
    /**
     * @param array{
     *     failureCount?: int|null,
     *     status?: 'TRIGGERED'|'MONITORING'|'MONITORING_COMPLETE'|'DISABLED'|null,
     *     threshold?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
