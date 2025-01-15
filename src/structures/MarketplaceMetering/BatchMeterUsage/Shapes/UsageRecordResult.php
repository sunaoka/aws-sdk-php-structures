<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\BatchMeterUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UsageRecord|null $UsageRecord
 * @property string|null $MeteringRecordId
 * @property 'Success'|'CustomerNotSubscribed'|'DuplicateRecord'|null $Status
 */
class UsageRecordResult extends Shape
{
    /**
     * @param array{
     *     UsageRecord?: UsageRecord|null,
     *     MeteringRecordId?: string|null,
     *     Status?: 'Success'|'CustomerNotSubscribed'|'DuplicateRecord'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
