<?php

namespace Sunaoka\Aws\Structures\Connect\ListTestCaseExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $TestCaseExecutionId
 * @property string|null $TestCaseId
 * @property 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null $TestCaseExecutionStatus
 * @property array<string, string>|null $Tags
 */
class TestCaseExecution extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     TestCaseExecutionId?: string|null,
     *     TestCaseId?: string|null,
     *     TestCaseExecutionStatus?: 'INITIATED'|'PASSED'|'FAILED'|'IN_PROGRESS'|'STOPPED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
