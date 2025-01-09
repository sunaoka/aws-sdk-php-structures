<?php

namespace Sunaoka\Aws\Structures\Swf\SignalWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property string $runId
 * @property string $signalName
 * @property string $input
 */
class SignalWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     runId?: string,
     *     signalName: string,
     *     input?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
