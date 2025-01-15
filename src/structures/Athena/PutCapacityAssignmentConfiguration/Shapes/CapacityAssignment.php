<?php

namespace Sunaoka\Aws\Structures\Athena\PutCapacityAssignmentConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $WorkGroupNames
 */
class CapacityAssignment extends Shape
{
    /**
     * @param array{WorkGroupNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
