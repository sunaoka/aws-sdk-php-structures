<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignName;

trait UpdateCampaignNameTrait
{
    /**
     * @param UpdateCampaignNameRequest $args
     * @return void
     */
    public function updateCampaignName(UpdateCampaignNameRequest $args)
    {
        parent::updateCampaignName($args->toArray());
    }
}
