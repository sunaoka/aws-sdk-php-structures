<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $ConcurrentJobs
 * @property string|null $Description
 * @property string $Name
 * @property Shapes\ReservationPlanSettings|null $ReservationPlanSettings
 * @property 'ACTIVE'|'PAUSED'|null $Status
 */
class UpdateQueueRequest extends Request
{
    /**
     * @param array{
     *     ConcurrentJobs?: int|null,
     *     Description?: string|null,
     *     Name: string,
     *     ReservationPlanSettings?: Shapes\ReservationPlanSettings|null,
     *     Status?: 'ACTIVE'|'PAUSED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
