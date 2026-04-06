<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutionRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObservationId
 * @property 'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $Record
 */
class ExecutionRecord extends Shape
{
    /**
     * @param array{
     *     ObservationId?: string|null,
     *     Status?: 'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Record?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
