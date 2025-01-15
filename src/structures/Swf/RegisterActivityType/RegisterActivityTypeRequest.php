<?php

namespace Sunaoka\Aws\Structures\Swf\RegisterActivityType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $name
 * @property string $version
 * @property string|null $description
 * @property string|null $defaultTaskStartToCloseTimeout
 * @property string|null $defaultTaskHeartbeatTimeout
 * @property Shapes\TaskList|null $defaultTaskList
 * @property string|null $defaultTaskPriority
 * @property string|null $defaultTaskScheduleToStartTimeout
 * @property string|null $defaultTaskScheduleToCloseTimeout
 */
class RegisterActivityTypeRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     name: string,
     *     version: string,
     *     description?: string|null,
     *     defaultTaskStartToCloseTimeout?: string|null,
     *     defaultTaskHeartbeatTimeout?: string|null,
     *     defaultTaskList?: Shapes\TaskList|null,
     *     defaultTaskPriority?: string|null,
     *     defaultTaskScheduleToStartTimeout?: string|null,
     *     defaultTaskScheduleToCloseTimeout?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
