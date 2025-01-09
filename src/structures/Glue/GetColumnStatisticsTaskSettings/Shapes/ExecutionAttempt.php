<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'STARTED' $Status
 * @property string $ColumnStatisticsTaskRunId
 * @property \Aws\Api\DateTimeResult $ExecutionTimestamp
 * @property string $ErrorMessage
 */
class ExecutionAttempt extends Shape
{
    /**
     * @param array{
     *     Status?: 'FAILED'|'STARTED',
     *     ColumnStatisticsTaskRunId?: string,
     *     ExecutionTimestamp?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
