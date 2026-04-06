<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\Schedule $schedule
 */
class UpdateCampaignScheduleRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     schedule: Shapes\Schedule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
