<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityAssignmentConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $WorkGroupNames
 */
class CapacityAssignment extends Shape
{
    /**
     * @param array{WorkGroupNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
