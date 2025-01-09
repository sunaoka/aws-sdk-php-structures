<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanaryRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'PASSED'|'FAILED' $State
 * @property string $StateReason
 * @property 'CANARY_FAILURE'|'EXECUTION_FAILURE' $StateReasonCode
 */
class CanaryRunStatus extends Shape
{
    /**
     * @param array{
     *     State?: 'RUNNING'|'PASSED'|'FAILED',
     *     StateReason?: string,
     *     StateReasonCode?: 'CANARY_FAILURE'|'EXECUTION_FAILURE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
