<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShareAllocation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MarketplaceRevenueShareAllocationId
 * @property string $MarketplaceRevenueShareIdentifier
 * @property string $EffectiveFrom
 * @property string $EffectiveUntil
 * @property string $RevenueSharePercent
 * @property 'ACTIVE'|'INACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $MarketplaceRevenueShareRevision
 * @property string $MarketplaceRevenueShareLatestRevision
 */
class GetMarketplaceRevenueShareAllocationResponse extends Response
{
}
