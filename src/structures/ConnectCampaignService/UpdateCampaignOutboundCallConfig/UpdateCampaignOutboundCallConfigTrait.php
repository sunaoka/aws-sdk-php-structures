<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignOutboundCallConfig;

trait UpdateCampaignOutboundCallConfigTrait
{
    /**
     * @param UpdateCampaignOutboundCallConfigRequest $args
     * @return void
     */
    public function updateCampaignOutboundCallConfig(UpdateCampaignOutboundCallConfigRequest $args)
    {
        parent::updateCampaignOutboundCallConfig($args->toArray());
    }
}
