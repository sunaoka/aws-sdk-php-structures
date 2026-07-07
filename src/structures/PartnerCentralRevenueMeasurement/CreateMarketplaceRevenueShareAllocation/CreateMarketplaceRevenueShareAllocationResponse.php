<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string $ProductId
 * @property string|null $ProductName
 * @property string $Arn
 * @property string $EffectiveFrom
 * @property string|null $EffectiveUntil
 * @property string $RevenueSharePercent
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LatestMarketplaceRevenueShareRevision
 */
class CreateMarketplaceRevenueShareAllocationResponse extends Response
{
}
