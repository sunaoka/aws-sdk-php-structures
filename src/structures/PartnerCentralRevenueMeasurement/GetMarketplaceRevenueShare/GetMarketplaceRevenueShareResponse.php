<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ProductId
 * @property string $Arn
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property int<1, max>|null $Revision
 * @property int<1, max>|null $LatestRevision
 * @property int|null $TotalActiveMarketplaceRevenueShareAllocationCount
 * @property int|null $TotalMarketplaceRevenueShareAllocationCount
 */
class GetMarketplaceRevenueShareResponse extends Response
{
}
