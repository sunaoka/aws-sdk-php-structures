<?php

namespace Sunaoka\Aws\Structures\Swf\StartWorkflowExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $workflowId
 * @property Shapes\WorkflowType $workflowType
 * @property Shapes\TaskList $taskList
 * @property string $taskPriority
 * @property string $input
 * @property string $executionStartToCloseTimeout
 * @property list<string> $tagList
 * @property string $taskStartToCloseTimeout
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $childPolicy
 * @property string $lambdaRole
 */
class StartWorkflowExecutionRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     workflowId: string,
     *     workflowType: Shapes\WorkflowType,
     *     taskList?: Shapes\TaskList,
     *     taskPriority?: string,
     *     input?: string,
     *     executionStartToCloseTimeout?: string,
     *     tagList?: list<string>,
     *     taskStartToCloseTimeout?: string,
     *     childPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     lambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
