<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignChannelSubtypeConfig;

trait UpdateCampaignChannelSubtypeConfigTrait
{
    /**
     * @param UpdateCampaignChannelSubtypeConfigRequest $args
     * @return void
     */
    public function updateCampaignChannelSubtypeConfig(UpdateCampaignChannelSubtypeConfigRequest $args)
    {
        parent::updateCampaignChannelSubtypeConfig($args->toArray());
    }
}
