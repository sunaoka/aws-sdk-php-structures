<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecycleExecutionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'IN_PROGRESS'|'SKIPPED'|'SUCCESS'|null $status
 * @property string|null $reason
 */
class LifecycleExecutionResourceState extends Shape
{
    /**
     * @param array{
     *     status?: 'FAILED'|'IN_PROGRESS'|'SKIPPED'|'SUCCESS'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
