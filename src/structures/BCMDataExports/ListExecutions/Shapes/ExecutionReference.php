<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutionId
 * @property ExecutionStatus $ExecutionStatus
 */
class ExecutionReference extends Shape
{
    /**
     * @param array{
     *     ExecutionId: string,
     *     ExecutionStatus: ExecutionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
