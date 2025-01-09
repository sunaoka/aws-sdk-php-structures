<?php

namespace Sunaoka\Aws\Structures\AppFabric\BatchGetUserAccessTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorCode
 * @property string $errorMessage
 */
class TaskError extends Shape
{
    /**
     * @param array{
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
