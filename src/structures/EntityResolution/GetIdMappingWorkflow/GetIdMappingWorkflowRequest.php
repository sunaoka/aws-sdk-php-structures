<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdMappingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 */
class GetIdMappingWorkflowRequest extends Request
{
    /**
     * @param array{workflowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
