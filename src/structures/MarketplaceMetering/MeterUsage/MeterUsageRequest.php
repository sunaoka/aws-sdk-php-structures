<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\MeterUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $UsageDimension
 * @property int<0, 2147483647> $UsageQuantity
 * @property bool $DryRun
 * @property list<Shapes\UsageAllocation> $UsageAllocations
 */
class MeterUsageRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     UsageDimension: string,
     *     UsageQuantity?: int<0, 2147483647>,
     *     DryRun?: bool,
     *     UsageAllocations?: list<Shapes\UsageAllocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
