<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationTime;

trait UpdateCampaignCommunicationTimeTrait
{
    /**
     * @param UpdateCampaignCommunicationTimeRequest $args
     * @return void
     */
    public function updateCampaignCommunicationTime(UpdateCampaignCommunicationTimeRequest $args)
    {
        parent::updateCampaignCommunicationTime($args->toArray());
    }
}
