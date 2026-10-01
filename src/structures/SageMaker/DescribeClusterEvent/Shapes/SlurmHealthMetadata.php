<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Slurmdbd' $Component
 * @property 'Healthy'|'Unhealthy' $Status
 * @property 'DaemonDown'|'DaemonDisabled'|'DbUnreachable'|null $Reason
 */
class SlurmHealthMetadata extends Shape
{
    /**
     * @param array{
     *     Component: 'Slurmdbd',
     *     Status: 'Healthy'|'Unhealthy',
     *     Reason?: 'DaemonDown'|'DaemonDisabled'|'DbUnreachable'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
