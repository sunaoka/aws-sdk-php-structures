<?php

namespace Sunaoka\Aws\Structures\Transfer\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkflowId
 * @property string $Description
 * @property string $Arn
 */
class ListedWorkflow extends Shape
{
    /**
     * @param array{
     *     WorkflowId?: string,
     *     Description?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
