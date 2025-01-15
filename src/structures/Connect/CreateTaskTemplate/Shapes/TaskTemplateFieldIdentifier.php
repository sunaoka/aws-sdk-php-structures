<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class TaskTemplateFieldIdentifier extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
