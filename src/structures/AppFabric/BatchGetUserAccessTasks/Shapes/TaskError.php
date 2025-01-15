<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class TaskError extends Shape
{
    /**
     * @param array{
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
