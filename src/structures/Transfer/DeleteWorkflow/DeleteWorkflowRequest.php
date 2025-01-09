<?php

namespace Sunaoka\Aws\Structures\Transfer\DeleteWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowId
 */
class DeleteWorkflowRequest extends Request
{
    /**
     * @param array{WorkflowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
