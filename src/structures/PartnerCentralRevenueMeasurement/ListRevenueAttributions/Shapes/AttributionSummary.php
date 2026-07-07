<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\ListRevenueAttributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Id
 * @property 'AWS'|'Sandbox'|null $Catalog
 * @property string|null $Name
 * @property 'MULTI_TENANT'|'SINGLE_TENANT' $TenancyModel
 * @property MarketplaceProductSummary|null $MarketplaceProduct
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LatestRevision
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property int<0, max>|null $TotalActiveRevenueAttributionAllocationCount
 * @property int<0, max>|null $TotalRevenueAttributionAllocationCount
 */
class AttributionSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Id?: string|null,
     *     Catalog?: 'AWS'|'Sandbox'|null,
     *     Name?: string|null,
     *     TenancyModel: 'MULTI_TENANT'|'SINGLE_TENANT',
     *     MarketplaceProduct?: MarketplaceProductSummary|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LatestRevision?: string|null,
     *     EffectiveFrom?: string|null,
     *     EffectiveUntil?: string|null,
     *     TotalActiveRevenueAttributionAllocationCount?: int<0, max>|null,
     *     TotalRevenueAttributionAllocationCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
