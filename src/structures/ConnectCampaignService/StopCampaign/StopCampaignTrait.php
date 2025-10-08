<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\StopCampaign;

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
