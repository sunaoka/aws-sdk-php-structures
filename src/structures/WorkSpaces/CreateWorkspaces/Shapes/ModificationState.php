<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROOT_VOLUME'|'USER_VOLUME'|'COMPUTE_TYPE'|null $Resource
 * @property 'UPDATE_INITIATED'|'UPDATE_IN_PROGRESS'|null $State
 */
class ModificationState extends Shape
{
    /**
     * @param array{
     *     Resource?: 'ROOT_VOLUME'|'USER_VOLUME'|'COMPUTE_TYPE'|null,
     *     State?: 'UPDATE_INITIATED'|'UPDATE_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
