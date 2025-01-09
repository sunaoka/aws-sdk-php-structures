<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 */
class WorkflowDefinitionSummary extends Shape
{
    /**
     * @param array{path: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
