<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignmentsForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssignmentName
 * @property string|null $PolicyArn
 */
class ActiveIAMPolicyAssignment extends Shape
{
    /**
     * @param array{
     *     AssignmentName?: string|null,
     *     PolicyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
