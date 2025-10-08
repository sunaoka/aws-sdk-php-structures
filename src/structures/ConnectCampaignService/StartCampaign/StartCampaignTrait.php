<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\StartCampaign;

trait StartCampaignTrait
{
    /**
     * @param StartCampaignRequest $args
     * @return void
     */
    public function startCampaign(StartCampaignRequest $args)
    {
        parent::startCampaign($args->toArray());
    }
}
