<?php

namespace Sunaoka\Aws\Structures\drs\UpdateRecoveryPlanExecutionStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPlanExecutionStepArn
 * @property 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED'|null $status
 * @property list<Shapes\RecoveryPlanServer>|null $servers
 * @property int<1, 120>|null $waitDurationMinutes
 */
class UpdateRecoveryPlanExecutionStepRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanExecutionStepArn: string,
     *     status?: 'NOT_STARTED'|'EXECUTING'|'WAITING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'SKIPPED'|null,
     *     servers?: list<Shapes\RecoveryPlanServer>|null,
     *     waitDurationMinutes?: int<1, 120>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
