<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\MeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 2147483647>|null $AllocatedUsageQuantity
 * @property string|null $AllocatedUsageQuantityAsDecimal
 * @property list<Tag>|null $Tags
 */
class UsageAllocation extends Shape
{
    /**
     * @param array{
     *     AllocatedUsageQuantity?: int<0, 2147483647>|null,
     *     AllocatedUsageQuantityAsDecimal?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
