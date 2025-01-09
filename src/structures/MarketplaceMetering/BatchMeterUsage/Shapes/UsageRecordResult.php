<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UsageRecord $UsageRecord
 * @property string $MeteringRecordId
 * @property 'Success'|'CustomerNotSubscribed'|'DuplicateRecord' $Status
 */
class UsageRecordResult extends Shape
{
    /**
     * @param array{
     *     UsageRecord?: UsageRecord,
     *     MeteringRecordId?: string,
     *     Status?: 'Success'|'CustomerNotSubscribed'|'DuplicateRecord'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
