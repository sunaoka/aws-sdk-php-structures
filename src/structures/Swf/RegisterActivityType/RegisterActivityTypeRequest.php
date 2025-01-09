<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterActivityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property string $version
 * @property string $description
 * @property string $defaultTaskStartToCloseTimeout
 * @property string $defaultTaskHeartbeatTimeout
 * @property Shapes\TaskList $defaultTaskList
 * @property string $defaultTaskPriority
 * @property string $defaultTaskScheduleToStartTimeout
 * @property string $defaultTaskScheduleToCloseTimeout
 */
class RegisterActivityTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name: string,
     *     version: string,
     *     description?: string,
     *     defaultTaskStartToCloseTimeout?: string,
     *     defaultTaskHeartbeatTimeout?: string,
     *     defaultTaskList?: Shapes\TaskList,
     *     defaultTaskPriority?: string,
     *     defaultTaskScheduleToStartTimeout?: string,
     *     defaultTaskScheduleToCloseTimeout?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
