<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\DeleteCampaign;

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
