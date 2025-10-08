<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignCommunicationTime;

trait DeleteCampaignCommunicationTimeTrait
{
    /**
     * @param DeleteCampaignCommunicationTimeRequest $args
     * @return void
     */
    public function deleteCampaignCommunicationTime(DeleteCampaignCommunicationTimeRequest $args)
    {
        parent::deleteCampaignCommunicationTime($args->toArray());
    }
}
