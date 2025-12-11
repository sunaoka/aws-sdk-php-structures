<?php

namespace Sunaoka\Aws\Structures\NovaAct\UpdateWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING' $status
 */
class UpdateWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string,
     *     status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
