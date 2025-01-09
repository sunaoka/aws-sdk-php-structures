<?php

namespace Sunaoka\Aws\Structures\Swf\ListClosedWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $version
 */
class WorkflowTypeFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
