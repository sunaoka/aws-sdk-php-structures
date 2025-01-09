<?php

namespace Sunaoka\Aws\Structures\Swf\TerminateWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property string $runId
 * @property string $reason
 * @property string $details
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 */
class TerminateWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     runId?: string,
     *     reason?: string,
     *     details?: string,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
