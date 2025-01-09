<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647> $AllocatedUsageQuantity
 * @property list<Tag> $Tags
 */
class UsageAllocation extends Shape
{
    /**
     * @param array{
     *     AllocatedUsageQuantity: int<0, 2147483647>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
