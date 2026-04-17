<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignEntryLimits;

trait DeleteCampaignEntryLimitsTrait
{
    /**
     * @param DeleteCampaignEntryLimitsRequest $args
     * @return void
     */
    public function deleteCampaignEntryLimits(DeleteCampaignEntryLimitsRequest $args)
    {
        parent::deleteCampaignEntryLimits($args->toArray());
    }
}
