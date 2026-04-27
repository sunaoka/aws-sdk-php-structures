<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROOT_VOLUME'|'USER_VOLUME'|'COMPUTE_TYPE'|'PROTOCOL'|null $Resource
 * @property 'UPDATE_INITIATED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|null $State
 */
class ModificationState extends Shape
{
    /**
     * @param array{
     *     Resource?: 'ROOT_VOLUME'|'USER_VOLUME'|'COMPUTE_TYPE'|'PROTOCOL'|null,
     *     State?: 'UPDATE_INITIATED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
