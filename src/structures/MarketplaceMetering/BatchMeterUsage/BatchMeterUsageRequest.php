<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\UsageRecord> $UsageRecords
 * @property string $ProductCode
 */
class BatchMeterUsageRequest extends Request
{
    /**
     * @param array{
     *     UsageRecords: list<Shapes\UsageRecord>,
     *     ProductCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
