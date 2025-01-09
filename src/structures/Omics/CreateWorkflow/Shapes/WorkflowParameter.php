<?php

namespace Sunaoka\Aws\Structures\Omics\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property bool $optional
 */
class WorkflowParameter extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     optional?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
