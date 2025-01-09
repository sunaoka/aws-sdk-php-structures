<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkflowId
 */
class DescribeWorkflowRequest extends Request
{
    /**
     * @param array{WorkflowId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
