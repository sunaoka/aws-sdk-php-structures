<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignName;

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
