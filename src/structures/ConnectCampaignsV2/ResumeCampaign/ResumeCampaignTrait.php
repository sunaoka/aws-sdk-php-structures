<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ResumeCampaign;

trait ResumeCampaignTrait
{
    /**
     * @param ResumeCampaignRequest $args
     * @return void
     */
    public function resumeCampaign(ResumeCampaignRequest $args)
    {
        parent::resumeCampaign($args->toArray());
    }
}
