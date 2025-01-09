<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterWorkflowType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property string $version
 * @property string $description
 * @property string $defaultTaskStartToCloseTimeout
 * @property string $defaultExecutionStartToCloseTimeout
 * @property Shapes\TaskList $defaultTaskList
 * @property string $defaultTaskPriority
 * @property 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON' $defaultChildPolicy
 * @property string $defaultLambdaRole
 */
class RegisterWorkflowTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name: string,
     *     version: string,
     *     description?: string,
     *     defaultTaskStartToCloseTimeout?: string,
     *     defaultExecutionStartToCloseTimeout?: string,
     *     defaultTaskList?: Shapes\TaskList,
     *     defaultTaskPriority?: string,
     *     defaultChildPolicy?: 'TERMINATE'|'REQUEST_CANCEL'|'ABANDON',
     *     defaultLambdaRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
