<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $ConcurrentJobs
 * @property string|null $Description
 * @property int<0, max>|null $MaximumConcurrentFeeds
 * @property string $Name
 * @property 'ON_DEMAND'|'RESERVED'|null $PricingPlan
 * @property Shapes\ReservationPlanSettings|null $ReservationPlanSettings
 * @property 'ACTIVE'|'PAUSED'|null $Status
 * @property array<string, string>|null $Tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     ConcurrentJobs?: int|null,
     *     Description?: string|null,
     *     MaximumConcurrentFeeds?: int<0, max>|null,
     *     Name: string,
     *     PricingPlan?: 'ON_DEMAND'|'RESERVED'|null,
     *     ReservationPlanSettings?: Shapes\ReservationPlanSettings|null,
     *     Status?: 'ACTIVE'|'PAUSED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
