<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ResumeCampaign;

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
