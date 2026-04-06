<?php

namespace Sunaoka\Aws\Structures\Batch\CreateQuotaShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $quotaShareName
 * @property string $jobQueue
 * @property list<Shapes\QuotaShareCapacityLimit> $capacityLimits
 * @property Shapes\QuotaShareResourceSharingConfiguration $resourceSharingConfiguration
 * @property Shapes\QuotaSharePreemptionConfiguration $preemptionConfiguration
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property array<string, string>|null $tags
 */
class CreateQuotaShareRequest extends Request
{
    /**
     * @param array{
     *     quotaShareName: string,
     *     jobQueue: string,
     *     capacityLimits: list<Shapes\QuotaShareCapacityLimit>,
     *     resourceSharingConfiguration: Shapes\QuotaShareResourceSharingConfiguration,
     *     preemptionConfiguration: Shapes\QuotaSharePreemptionConfiguration,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
