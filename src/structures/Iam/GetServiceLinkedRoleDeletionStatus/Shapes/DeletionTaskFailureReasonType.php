<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLinkedRoleDeletionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Reason
 * @property list<RoleUsageType> $RoleUsageList
 */
class DeletionTaskFailureReasonType extends Shape
{
    /**
     * @param array{
     *     Reason?: string,
     *     RoleUsageList?: list<RoleUsageType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
