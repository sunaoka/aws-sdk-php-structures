<?php

namespace Sunaoka\Aws\Structures\Transfer\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkflowId
 * @property string|null $Description
 * @property string|null $Arn
 */
class ListedWorkflow extends Shape
{
    /**
     * @param array{
     *     WorkflowId?: string|null,
     *     Description?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
