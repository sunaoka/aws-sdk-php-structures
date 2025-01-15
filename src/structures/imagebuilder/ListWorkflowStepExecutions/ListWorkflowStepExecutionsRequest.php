<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowStepExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string $workflowExecutionId
 */
class ListWorkflowStepExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     workflowExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
