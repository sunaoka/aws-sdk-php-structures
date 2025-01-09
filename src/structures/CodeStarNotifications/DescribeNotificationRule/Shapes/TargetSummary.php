<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetAddress
 * @property string $TargetType
 * @property 'PENDING'|'ACTIVE'|'UNREACHABLE'|'INACTIVE'|'DEACTIVATED' $TargetStatus
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     TargetAddress?: string,
     *     TargetType?: string,
     *     TargetStatus?: 'PENDING'|'ACTIVE'|'UNREACHABLE'|'INACTIVE'|'DEACTIVATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
