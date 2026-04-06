<?php

namespace Sunaoka\Aws\Structures\NovaAct\UpdateAct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 * @property string $sessionId
 * @property string $actId
 * @property 'RUNNING'|'PENDING_CLIENT_ACTION'|'PENDING_HUMAN_ACTION'|'SUCCEEDED'|'FAILED'|'TIMED_OUT' $status
 * @property Shapes\ActError|null $error
 */
class UpdateActRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string,
     *     sessionId: string,
     *     actId: string,
     *     status: 'RUNNING'|'PENDING_CLIENT_ACTION'|'PENDING_HUMAN_ACTION'|'SUCCEEDED'|'FAILED'|'TIMED_OUT',
     *     error?: Shapes\ActError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
