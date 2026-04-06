<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSchedule;

trait UpdateCampaignScheduleTrait
{
    /**
     * @param UpdateCampaignScheduleRequest $args
     * @return void
     */
    public function updateCampaignSchedule(UpdateCampaignScheduleRequest $args)
    {
        parent::updateCampaignSchedule($args->toArray());
    }
}
