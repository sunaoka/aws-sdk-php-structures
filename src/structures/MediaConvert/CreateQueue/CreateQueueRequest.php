<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $ConcurrentJobs
 * @property string $Description
 * @property string $Name
 * @property 'ON_DEMAND'|'RESERVED' $PricingPlan
 * @property Shapes\ReservationPlanSettings $ReservationPlanSettings
 * @property 'ACTIVE'|'PAUSED' $Status
 * @property array<string, string> $Tags
 */
class CreateQueueRequest extends Request
{
    /**
     * @param array{
     *     ConcurrentJobs?: int,
     *     Description?: string,
     *     Name: string,
     *     PricingPlan?: 'ON_DEMAND'|'RESERVED',
     *     ReservationPlanSettings?: Shapes\ReservationPlanSettings,
     *     Status?: 'ACTIVE'|'PAUSED',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
