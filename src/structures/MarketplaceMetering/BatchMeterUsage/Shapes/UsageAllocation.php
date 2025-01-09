<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AllocatedUsageQuantity
 * @property list<Tag> $Tags
 */
class UsageAllocation extends Shape
{
    /**
     * @param array{
     *     AllocatedUsageQuantity: int,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
