<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WrapUpFlowId
 */
class TaskTemplateContactHooks extends Shape
{
    /**
     * @param array{WrapUpFlowId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
