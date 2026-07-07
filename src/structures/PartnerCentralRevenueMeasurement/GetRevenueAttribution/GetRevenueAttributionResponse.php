<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttribution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string|null $Name
 * @property string|null $Description
 * @property 'MULTI_TENANT'|'SINGLE_TENANT' $TenancyModel
 * @property Shapes\MarketplaceProductSummary|null $MarketplaceProduct
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $Revision
 * @property string|null $LatestRevision
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property int<0, max>|null $TotalActiveRevenueAttributionAllocationCount
 * @property int<0, max>|null $TotalRevenueAttributionAllocationCount
 */
class GetRevenueAttributionResponse extends Response
{
}
