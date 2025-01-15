<?php

namespace Sunaoka\Aws\Structures\Swf\TerminateWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property string|null $runId
 * @property string|null $reason
 * @property string|null $details
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $childPolicy
 */
class TerminateWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     runId?: string|null,
     *     reason?: string|null,
     *     details?: string|null,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
