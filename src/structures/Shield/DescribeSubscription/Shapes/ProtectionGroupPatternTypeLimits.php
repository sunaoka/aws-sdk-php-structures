<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectionGroupArbitraryPatternLimits $ArbitraryPatternLimits
 */
class ProtectionGroupPatternTypeLimits extends Shape
{
    /**
     * @param array{ArbitraryPatternLimits: ProtectionGroupArbitraryPatternLimits} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
