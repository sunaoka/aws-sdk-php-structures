<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeQuotaShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $quotaShareName
 * @property string|null $quotaShareArn
 * @property string|null $jobQueueArn
 * @property list<Shapes\QuotaShareCapacityLimit>|null $capacityLimits
 * @property Shapes\QuotaShareResourceSharingConfiguration|null $resourceSharingConfiguration
 * @property Shapes\QuotaSharePreemptionConfiguration|null $preemptionConfiguration
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'CREATING'|'VALID'|'INVALID'|'UPDATING'|'DELETING'|null $status
 * @property array<string, string>|null $tags
 */
class DescribeQuotaShareResponse extends Response
{
}
