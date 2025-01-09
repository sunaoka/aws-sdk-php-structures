<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 */
class DeleteMatchingWorkflowRequest extends Request
{
    /**
     * @param array{workflowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
