<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 */
class WorkflowDefinition extends Shape
{
    /**
     * @param array{path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
