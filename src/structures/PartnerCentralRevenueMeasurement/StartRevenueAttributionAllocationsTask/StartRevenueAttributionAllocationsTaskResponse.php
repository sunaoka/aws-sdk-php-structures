<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\StartRevenueAttributionAllocationsTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TaskId
 * @property 'IN_PROGRESS'|'COMPLETE'|'FAILED' $Status
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $RevenueAttributionArn
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property int $TotalRevenueAttributionAllocationRecords
 */
class StartRevenueAttributionAllocationsTaskResponse extends Response
{
}
