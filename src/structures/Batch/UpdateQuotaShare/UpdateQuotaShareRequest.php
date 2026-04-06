<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateQuotaShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quotaShareArn
 * @property list<Shapes\QuotaShareCapacityLimit>|null $capacityLimits
 * @property Shapes\QuotaShareResourceSharingConfiguration|null $resourceSharingConfiguration
 * @property Shapes\QuotaSharePreemptionConfiguration|null $preemptionConfiguration
 * @property 'ENABLED'|'DISABLED'|null $state
 */
class UpdateQuotaShareRequest extends Request
{
    /**
     * @param array{
     *     quotaShareArn: string,
     *     capacityLimits?: list<Shapes\QuotaShareCapacityLimit>|null,
     *     resourceSharingConfiguration?: Shapes\QuotaShareResourceSharingConfiguration|null,
     *     preemptionConfiguration?: Shapes\QuotaSharePreemptionConfiguration|null,
     *     state?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
