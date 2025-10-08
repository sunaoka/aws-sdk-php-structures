<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignDialerConfig;

trait UpdateCampaignDialerConfigTrait
{
    /**
     * @param UpdateCampaignDialerConfigRequest $args
     * @return void
     */
    public function updateCampaignDialerConfig(UpdateCampaignDialerConfigRequest $args)
    {
        parent::updateCampaignDialerConfig($args->toArray());
    }
}
