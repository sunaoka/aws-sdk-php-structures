<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentDeletionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 */
class OperationStatusFilter extends Shape
{
    /**
     * @param array{Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
