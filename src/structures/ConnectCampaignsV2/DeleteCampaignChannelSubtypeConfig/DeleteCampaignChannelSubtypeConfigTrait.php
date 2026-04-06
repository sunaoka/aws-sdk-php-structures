<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaignChannelSubtypeConfig;

trait DeleteCampaignChannelSubtypeConfigTrait
{
    /**
     * @param DeleteCampaignChannelSubtypeConfigRequest $args
     * @return void
     */
    public function deleteCampaignChannelSubtypeConfig(DeleteCampaignChannelSubtypeConfigRequest $args)
    {
        parent::deleteCampaignChannelSubtypeConfig($args->toArray());
    }
}
