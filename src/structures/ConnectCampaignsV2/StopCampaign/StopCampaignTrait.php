<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\StopCampaign;

trait StopCampaignTrait
{
    /**
     * @param StopCampaignRequest $args
     * @return void
     */
    public function stopCampaign(StopCampaignRequest $args)
    {
        parent::stopCampaign($args->toArray());
    }
}
