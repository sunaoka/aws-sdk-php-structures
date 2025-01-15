<?php

namespace Sunaoka\Aws\Structures\Swf\SignalWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property string|null $runId
 * @property string $signalName
 * @property string|null $input
 */
class SignalWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     runId?: string|null,
     *     signalName: string,
     *     input?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
