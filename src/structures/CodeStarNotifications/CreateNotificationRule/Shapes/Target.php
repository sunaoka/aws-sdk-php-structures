<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\CreateNotificationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TargetType
 * @property string|null $TargetAddress
 */
class Target extends Shape
{
    /**
     * @param array{
     *     TargetType?: string|null,
     *     TargetAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
