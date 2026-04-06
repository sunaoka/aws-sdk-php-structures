<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workflowBuildVersionArn
 */
class DeleteWorkflowRequest extends Request
{
    /**
     * @param array{workflowBuildVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
