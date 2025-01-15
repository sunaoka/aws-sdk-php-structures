<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaskTemplateDefaultFieldValue>|null $DefaultFieldValues
 */
class TaskTemplateDefaults extends Shape
{
    /**
     * @param array{DefaultFieldValues?: list<TaskTemplateDefaultFieldValue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
