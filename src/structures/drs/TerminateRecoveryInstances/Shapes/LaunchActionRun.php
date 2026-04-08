<?php

namespace Sunaoka\Aws\Structures\drs\TerminateRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchAction|null $action
 * @property string|null $runId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $failureReason
 */
class LaunchActionRun extends Shape
{
    /**
     * @param array{
     *     action?: LaunchAction|null,
     *     runId?: string|null,
     *     status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
