<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignEntryLimits;

trait UpdateCampaignEntryLimitsTrait
{
    /**
     * @param UpdateCampaignEntryLimitsRequest $args
     * @return void
     */
    public function updateCampaignEntryLimits(UpdateCampaignEntryLimitsRequest $args)
    {
        parent::updateCampaignEntryLimits($args->toArray());
    }
}
