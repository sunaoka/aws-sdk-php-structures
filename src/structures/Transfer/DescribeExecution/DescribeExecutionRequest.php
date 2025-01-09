<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExecutionId
 * @property string $WorkflowId
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{
     *     ExecutionId: string,
     *     WorkflowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
