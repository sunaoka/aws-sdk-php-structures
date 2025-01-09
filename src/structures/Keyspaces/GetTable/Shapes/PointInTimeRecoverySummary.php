<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property \Aws\Api\DateTimeResult $earliestRestorableTimestamp
 */
class PointInTimeRecoverySummary extends Shape
{
    /**
     * @param array{
     *     status: 'ENABLED'|'DISABLED',
     *     earliestRestorableTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
