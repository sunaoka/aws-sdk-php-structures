<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskTemplateDefaultFieldValue> $DefaultFieldValues
 */
class TaskTemplateDefaults extends Shape
{
    /**
     * @param array{DefaultFieldValues?: list<TaskTemplateDefaultFieldValue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
