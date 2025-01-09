<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\UpdateNotificationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TargetType
 * @property string $TargetAddress
 */
class Target extends Shape
{
    /**
     * @param array{
     *     TargetType?: string,
     *     TargetAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
