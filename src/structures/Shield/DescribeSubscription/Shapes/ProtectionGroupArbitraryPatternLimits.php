<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxMembers
 */
class ProtectionGroupArbitraryPatternLimits extends Shape
{
    /**
     * @param array{MaxMembers: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
