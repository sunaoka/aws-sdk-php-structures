<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentCreationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 */
class OperationStatusFilter extends Shape
{
    /**
     * @param array{Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
