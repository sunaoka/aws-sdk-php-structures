<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'PENDING'|null $status
 * @property string|null $reason
 */
class LifecycleExecutionState extends Shape
{
    /**
     * @param array{
     *     status?: 'IN_PROGRESS'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'PENDING'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
