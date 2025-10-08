<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PauseCampaign;

trait PauseCampaignTrait
{
    /**
     * @param PauseCampaignRequest $args
     * @return void
     */
    public function pauseCampaign(PauseCampaignRequest $args)
    {
        parent::pauseCampaign($args->toArray());
    }
}
