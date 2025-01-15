<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetJobDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $actionExecutionId
 */
class ActionContext extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     actionExecutionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
