<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIAMPolicyAssignments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssignmentName
 * @property 'ENABLED'|'DRAFT'|'DISABLED'|null $AssignmentStatus
 */
class IAMPolicyAssignmentSummary extends Shape
{
    /**
     * @param array{
     *     AssignmentName?: string|null,
     *     AssignmentStatus?: 'ENABLED'|'DRAFT'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
