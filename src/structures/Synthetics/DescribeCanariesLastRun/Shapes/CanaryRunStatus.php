<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'PASSED'|'FAILED'|null $State
 * @property string|null $StateReason
 * @property 'CANARY_FAILURE'|'EXECUTION_FAILURE'|null $StateReasonCode
 * @property 'PASSED'|'FAILED'|'UNKNOWN'|null $TestResult
 */
class CanaryRunStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'RUNNING'|'PASSED'|'FAILED'|null,
     *     StateReason?: string|null,
     *     StateReasonCode?: 'CANARY_FAILURE'|'EXECUTION_FAILURE'|null,
     *     TestResult?: 'PASSED'|'FAILED'|'UNKNOWN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
