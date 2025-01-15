<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstanceLifecycleConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Content
 */
class NotebookInstanceLifecycleHook extends Shape
{
    /**
     * @param array{Content?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
