<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterWorkflowType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property string $version
 * @property string|null $description
 * @property string|null $defaultTaskStartToCloseTimeout
 * @property string|null $defaultExecutionStartToCloseTimeout
 * @property Shapes\TaskList|null $defaultTaskList
 * @property string|null $defaultTaskPriority
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null $defaultChildPolicy
 * @property string|null $defaultLambdaRole
 */
class RegisterWorkflowTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name: string,
     *     version: string,
     *     description?: string|null,
     *     defaultTaskStartToCloseTimeout?: string|null,
     *     defaultExecutionStartToCloseTimeout?: string|null,
     *     defaultTaskList?: Shapes\TaskList|null,
     *     defaultTaskPriority?: string|null,
     *     defaultChildPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON'|null,
     *     defaultLambdaRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
