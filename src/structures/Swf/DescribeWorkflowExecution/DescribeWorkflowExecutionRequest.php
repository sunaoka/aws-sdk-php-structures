<?php

namespace Sunaoka\Aws\Structures\Swf\DescribeWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\WorkflowExecution $execution
 */
class DescribeWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     execution: Shapes\WorkflowExecution
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
