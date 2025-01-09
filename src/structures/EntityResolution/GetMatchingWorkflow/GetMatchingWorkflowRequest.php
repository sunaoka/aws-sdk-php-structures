<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowName
 */
class GetMatchingWorkflowRequest extends Request
{
    /**
     * @param array{workflowName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
