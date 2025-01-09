<?php

namespace Sunaoka\Aws\Structures\Swf\RequestCancelWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property string $runId
 */
class RequestCancelWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     runId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
