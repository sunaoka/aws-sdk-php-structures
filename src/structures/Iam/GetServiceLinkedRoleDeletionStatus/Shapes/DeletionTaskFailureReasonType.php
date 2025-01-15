<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Reason
 * @property list<RoleUsageType>|null $RoleUsageList
 */
class DeletionTaskFailureReasonType extends Shape
{
    /**
     * @param array{
     *     Reason?: string|null,
     *     RoleUsageList?: list<RoleUsageType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
