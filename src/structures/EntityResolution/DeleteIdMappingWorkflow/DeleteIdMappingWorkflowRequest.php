<?php

namespace Sunaoka\Aws\Structures\EntityResolution\DeleteIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 */
class DeleteIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{workflowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
