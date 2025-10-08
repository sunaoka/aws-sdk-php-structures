<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignCommunicationLimits;

trait DeleteCampaignCommunicationLimitsTrait
{
    /**
     * @param DeleteCampaignCommunicationLimitsRequest $args
     * @return void
     */
    public function deleteCampaignCommunicationLimits(DeleteCampaignCommunicationLimitsRequest $args)
    {
        parent::deleteCampaignCommunicationLimits($args->toArray());
    }
}
