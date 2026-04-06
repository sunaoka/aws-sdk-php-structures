<?php

namespace Sunaoka\Aws\Structures\NovaAct\DeleteWorkflowRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowDefinitionName
 * @property string $workflowRunId
 */
class DeleteWorkflowRunRequest extends Request
{
    /**
     * @param array{
     *     workflowDefinitionName: string,
     *     workflowRunId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
