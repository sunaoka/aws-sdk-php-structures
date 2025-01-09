<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Limit> $ProtectedResourceTypeLimits
 */
class ProtectionLimits extends Shape
{
    /**
     * @param array{ProtectedResourceTypeLimits: list<Limit>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
