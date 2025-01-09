<?php

namespace Sunaoka\Aws\Structures\Transfer\SendWorkflowStepState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowId
 * @property string $ExecutionId
 * @property string $Token
 * @property 'SUCCESS'|'FAILURE' $Status
 */
class SendWorkflowStepStateRequest extends Request
{
    /**
     * @param array{
     *     WorkflowId: string,
     *     ExecutionId: string,
     *     Token: string,
     *     Status: 'SUCCESS'|'FAILURE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
