<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property bool|null $optional
 */
class WorkflowParameter extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     optional?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
