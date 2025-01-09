<?php

namespace Sunaoka\Aws\Structures\Swf\ListOpenWorkflowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tag
 */
class TagFilter extends Shape
{
    /**
     * @param array{tag: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
