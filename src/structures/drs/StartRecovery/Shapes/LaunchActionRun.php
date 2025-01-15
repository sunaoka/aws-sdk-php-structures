<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LaunchAction|null $action
 * @property string|null $failureReason
 * @property string|null $runId
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $status
 */
class LaunchActionRun extends Shape
{
    /**
     * @param array{
     *     action?: LaunchAction|null,
     *     failureReason?: string|null,
     *     runId?: string|null,
     *     status?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
