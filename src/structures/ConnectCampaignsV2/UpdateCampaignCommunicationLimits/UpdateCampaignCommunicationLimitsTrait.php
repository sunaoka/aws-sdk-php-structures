<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignCommunicationLimits;

trait UpdateCampaignCommunicationLimitsTrait
{
    /**
     * @param UpdateCampaignCommunicationLimitsRequest $args
     * @return void
     */
    public function updateCampaignCommunicationLimits(UpdateCampaignCommunicationLimitsRequest $args)
    {
        parent::updateCampaignCommunicationLimits($args->toArray());
    }
}
