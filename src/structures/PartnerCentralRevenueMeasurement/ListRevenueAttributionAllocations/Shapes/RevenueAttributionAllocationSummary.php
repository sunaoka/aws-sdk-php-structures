<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributionAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RevenueAttributionAllocationId
 * @property string $RevenueAttributionIdentifier
 * @property 'OFFER'|'OPPORTUNITY' $EntityType
 * @property string $EntityIdentifier
 * @property string|null $EntityName
 * @property string $CustomerAwsAccountId
 * @property string $RevenueSharePercent
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property 'ACTIVE'|'INACTIVE' $Status
 */
class RevenueAttributionAllocationSummary extends Shape
{
    /**
     * @param array{
     *     RevenueAttributionAllocationId: string,
     *     RevenueAttributionIdentifier: string,
     *     EntityType: 'OFFER'|'OPPORTUNITY',
     *     EntityIdentifier: string,
     *     EntityName?: string|null,
     *     CustomerAwsAccountId: string,
     *     RevenueSharePercent: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil: string,
     *     Status: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
