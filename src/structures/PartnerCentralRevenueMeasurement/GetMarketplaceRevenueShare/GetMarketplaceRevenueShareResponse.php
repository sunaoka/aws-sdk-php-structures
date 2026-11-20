<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property 'AWS'|'Sandbox' $Catalog
 * @property list<Shapes\MarketplaceRevenueShareProductDetail> $Products
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $Revision
 * @property string $LatestRevision
 * @property string|null $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property int<0, max> $TotalActiveMarketplaceRevenueShareAllocationCount
 * @property int<0, max> $TotalMarketplaceRevenueShareAllocationCount
 */
class GetMarketplaceRevenueShareResponse extends Response
{
}
