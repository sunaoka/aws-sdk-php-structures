<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $ConcurrentJobs
 * @property string $Description
 * @property string $Name
 * @property Shapes\ReservationPlanSettings $ReservationPlanSettings
 * @property 'ACTIVE'|'PAUSED' $Status
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     ConcurrentJobs?: int,
     *     Description?: string,
     *     Name: string,
     *     ReservationPlanSettings?: Shapes\ReservationPlanSettings,
     *     Status?: 'ACTIVE'|'PAUSED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
