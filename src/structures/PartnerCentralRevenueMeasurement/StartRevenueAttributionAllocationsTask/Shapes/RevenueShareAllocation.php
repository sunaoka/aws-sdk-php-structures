<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\StartRevenueAttributionAllocationsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE'|'UPDATE' $Action
 * @property string|null $RevenueAttributionAllocationId
 * @property 'OFFER'|'OPPORTUNITY' $EntityType
 * @property string $EntityIdentifier
 * @property string $CustomerAwsAccountId
 * @property string $RevenueSharePercent
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property 'ACTIVE'|'INACTIVE'|null $Status
 */
class RevenueShareAllocation extends Shape
{
    /**
     * @param array{
     *     Action: 'CREATE'|'UPDATE',
     *     RevenueAttributionAllocationId?: string|null,
     *     EntityType: 'OFFER'|'OPPORTUNITY',
     *     EntityIdentifier: string,
     *     CustomerAwsAccountId: string,
     *     RevenueSharePercent: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil: string,
     *     Status?: 'ACTIVE'|'INACTIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
