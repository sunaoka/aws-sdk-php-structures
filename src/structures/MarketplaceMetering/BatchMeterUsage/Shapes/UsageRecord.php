<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $CustomerIdentifier
 * @property string $Dimension
 * @property int<0, 2147483647> $Quantity
 * @property list<UsageAllocation> $UsageAllocations
 */
class UsageRecord extends Shape
{
    /**
     * @param array{
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     CustomerIdentifier: string,
     *     Dimension: string,
     *     Quantity?: int<0, 2147483647>,
     *     UsageAllocations?: list<UsageAllocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
