<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowExecutionId
 */
class GetWorkflowExecutionRequest extends Request
{
    /**
     * @param array{workflowExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
