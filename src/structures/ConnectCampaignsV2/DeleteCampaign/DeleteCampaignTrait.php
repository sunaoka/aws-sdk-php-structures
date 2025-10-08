<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DeleteCampaign;

trait DeleteCampaignTrait
{
    /**
     * @param DeleteCampaignRequest $args
     * @return void
     */
    public function deleteCampaign(DeleteCampaignRequest $args)
    {
        parent::deleteCampaign($args->toArray());
    }
}
