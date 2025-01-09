<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $workflowExecutionId
 */
class ListWorkflowStepExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     workflowExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
