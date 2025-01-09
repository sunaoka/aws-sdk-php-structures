<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProtectionLimits $ProtectionLimits
 * @property ProtectionGroupLimits $ProtectionGroupLimits
 */
class SubscriptionLimits extends Shape
{
    /**
     * @param array{
     *     ProtectionLimits: ProtectionLimits,
     *     ProtectionGroupLimits: ProtectionGroupLimits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
