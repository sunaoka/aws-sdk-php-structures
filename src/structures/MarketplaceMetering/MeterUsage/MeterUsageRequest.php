<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\MeterUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProductCode
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $UsageDimension
 * @property int<0, 2147483647>|null $UsageQuantity
 * @property bool|null $DryRun
 * @property list<Shapes\UsageAllocation>|null $UsageAllocations
 * @property string|null $ClientToken
 */
class MeterUsageRequest extends Request
{
    /**
     * @param array{
     *     ProductCode: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     UsageDimension: string,
     *     UsageQuantity?: int<0, 2147483647>|null,
     *     DryRun?: bool|null,
     *     UsageAllocations?: list<Shapes\UsageAllocation>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
