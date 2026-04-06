<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignSource;

trait UpdateCampaignSourceTrait
{
    /**
     * @param UpdateCampaignSourceRequest $args
     * @return void
     */
    public function updateCampaignSource(UpdateCampaignSourceRequest $args)
    {
        parent::updateCampaignSource($args->toArray());
    }
}
