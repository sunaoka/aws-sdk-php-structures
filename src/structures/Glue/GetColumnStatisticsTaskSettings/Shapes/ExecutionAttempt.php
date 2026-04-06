<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'STARTED'|null $Status
 * @property string|null $ColumnStatisticsTaskRunId
 * @property \Aws\Api\DateTimeResult|null $ExecutionTimestamp
 * @property string|null $ErrorMessage
 */
class ExecutionAttempt extends Shape
{
    /**
     * @param array{
     *     Status?: 'FAILED'|'STARTED'|null,
     *     ColumnStatisticsTaskRunId?: string|null,
     *     ExecutionTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
