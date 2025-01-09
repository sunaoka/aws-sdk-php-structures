<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssignmentName
 * @property 'ENABLED'|'DRAFT'|'DISABLED' $AssignmentStatus
 */
class IAMPolicyAssignmentSummary extends Shape
{
    /**
     * @param array{
     *     AssignmentName?: string,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
