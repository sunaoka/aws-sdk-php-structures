<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocationsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RevenueAttributionAllocationId
 * @property 'OFFER'|'OPPORTUNITY' $EntityType
 * @property string $EntityId
 * @property string $CustomerAwsAccountId
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property 'CREATE'|'UPDATE' $Action
 * @property 'ALLOCATION_CAP_EXCEEDED'|'RESOURCE_NOT_FOUND'|'IMMUTABLE_ALLOCATION'|'ACCESS_DENIED'|'INVALID_VALUE'|'CONCURRENT_MODIFICATION'|'INTERNAL_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class RevenueAttributionAllocationErrorDetail extends Shape
{
    /**
     * @param array{
     *     RevenueAttributionAllocationId?: string|null,
     *     EntityType: 'OFFER'|'OPPORTUNITY',
     *     EntityId: string,
     *     CustomerAwsAccountId: string,
     *     EffectiveFrom: string,
     *     EffectiveUntil: string,
     *     Action: 'CREATE'|'UPDATE',
     *     ErrorCode: 'ALLOCATION_CAP_EXCEEDED'|'RESOURCE_NOT_FOUND'|'IMMUTABLE_ALLOCATION'|'ACCESS_DENIED'|'INVALID_VALUE'|'CONCURRENT_MODIFICATION'|'INTERNAL_ERROR',
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
