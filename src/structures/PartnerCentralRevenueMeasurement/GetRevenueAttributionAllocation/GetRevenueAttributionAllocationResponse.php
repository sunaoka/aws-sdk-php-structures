<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocation;

use Sunaoka\Aws\Structures\Response;

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
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $RevenueAttributionRevision
 * @property string $RevenueAttributionLatestRevision
 */
class GetRevenueAttributionAllocationResponse extends Response
{
}
