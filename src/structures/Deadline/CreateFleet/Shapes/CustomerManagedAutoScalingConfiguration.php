<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $standbyWorkerCount
 * @property int<0, 2147483647>|null $workerIdleDurationSeconds
 * @property int<1, 2147483647>|null $scaleOutWorkersPerMinute
 */
class CustomerManagedAutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     standbyWorkerCount?: int<0, 2147483647>|null,
     *     workerIdleDurationSeconds?: int<0, 2147483647>|null,
     *     scaleOutWorkersPerMinute?: int<1, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
