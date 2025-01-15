<?php

namespace Sunaoka\Aws\Structures\Swf\StartWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property Shapes\WorkflowType $workflowType
 * @property Shapes\TaskList|null $taskList
 * @property string|null $taskPriority
 * @property string|null $input
 * @property string|null $executionStartToCloseTimeout
 * @property list<string>|null $tagList
 * @property string|null $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $childPolicy
 * @property string|null $lambdaRole
 */
class StartWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     workflowType: Shapes\WorkflowType,
     *     taskList?: Shapes\TaskList|null,
     *     taskPriority?: string|null,
     *     input?: string|null,
     *     executionStartToCloseTimeout?: string|null,
     *     tagList?: list<string>|null,
     *     taskStartToCloseTimeout?: string|null,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null,
     *     lambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
