<?php

namespace Sunaoka\Aws\Structures\Batch\ListQuotaShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $quotaShareName
 * @property string|null $quotaShareArn
 * @property string|null $jobQueueArn
 * @property list<QuotaShareCapacityLimit>|null $capacityLimits
 * @property QuotaShareResourceSharingConfiguration|null $resourceSharingConfiguration
 * @property QuotaSharePreemptionConfiguration|null $preemptionConfiguration
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'CREATING'|'VALID'|'INVALID'|'UPDATING'|'DELETING'|null $status
 */
class QuotaShareDetail extends Shape
{
    /**
     * @param array{
     *     quotaShareName?: string|null,
     *     quotaShareArn?: string|null,
     *     jobQueueArn?: string|null,
     *     capacityLimits?: list<QuotaShareCapacityLimit>|null,
     *     resourceSharingConfiguration?: QuotaShareResourceSharingConfiguration|null,
     *     preemptionConfiguration?: QuotaSharePreemptionConfiguration|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     status?: 'CREATING'|'VALID'|'INVALID'|'UPDATING'|'DELETING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
