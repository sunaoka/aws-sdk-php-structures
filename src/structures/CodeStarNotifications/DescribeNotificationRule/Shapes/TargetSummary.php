<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetAddress
 * @property string|null $TargetType
 * @property 'PENDING'|'ACTIVE'|'UNREACHABLE'|'INACTIVE'|'DEACTIVATED'|null $TargetStatus
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     TargetAddress?: string|null,
     *     TargetType?: string|null,
     *     TargetStatus?: 'PENDING'|'ACTIVE'|'UNREACHABLE'|'INACTIVE'|'DEACTIVATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
