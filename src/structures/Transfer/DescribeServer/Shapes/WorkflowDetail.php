<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkflowId
 * @property string $ExecutionRole
 */
class WorkflowDetail extends Shape
{
    /**
     * @param array{
     *     WorkflowId: string,
     *     ExecutionRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
