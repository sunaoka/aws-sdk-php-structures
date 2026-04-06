<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowBuildVersionArn
 */
class GetWorkflowRequest extends Request
{
    /**
     * @param array{workflowBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
