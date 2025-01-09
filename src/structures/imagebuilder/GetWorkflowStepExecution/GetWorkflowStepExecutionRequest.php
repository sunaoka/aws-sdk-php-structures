<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflowStepExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stepExecutionId
 */
class GetWorkflowStepExecutionRequest extends Request
{
    /**
     * @param array{stepExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
