<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxProtectionGroups
 * @property ProtectionGroupPatternTypeLimits $PatternTypeLimits
 */
class ProtectionGroupLimits extends Shape
{
    /**
     * @param array{
     *     MaxProtectionGroups: int,
     *     PatternTypeLimits: ProtectionGroupPatternTypeLimits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
