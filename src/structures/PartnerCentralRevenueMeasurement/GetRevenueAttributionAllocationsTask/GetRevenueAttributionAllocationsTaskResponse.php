<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetRevenueAttributionAllocationsTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $Status
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $RevenueAttributionArn
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property int $TotalRevenueAttributionAllocationRecords
 * @property string|null $Description
 * @property string|null $RevenueAttributionLatestRevision
 * @property list<Shapes\RevenueAttributionAllocationErrorDetail>|null $ErrorDetailList
 */
class GetRevenueAttributionAllocationsTaskResponse extends Response
{
}
