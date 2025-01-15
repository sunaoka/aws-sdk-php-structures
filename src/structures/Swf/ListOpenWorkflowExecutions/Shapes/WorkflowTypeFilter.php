<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $version
 */
class WorkflowTypeFilter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
