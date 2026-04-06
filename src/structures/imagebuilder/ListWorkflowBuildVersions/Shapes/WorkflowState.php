<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPRECATED'|null $status
 * @property string|null $reason
 */
class WorkflowState extends Shape
{
    /**
     * @param array{
     *     status?: 'DEPRECATED'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
