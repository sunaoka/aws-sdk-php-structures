<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\ListCampaigns;

trait ListCampaignsTrait
{
    /**
     * @param ListCampaignsRequest $args
     * @return ListCampaignsResponse
     */
    public function listCampaigns(ListCampaignsRequest $args)
    {
        $result = parent::listCampaigns($args->toArray());
        return new ListCampaignsResponse($result->toArray());
    }
}
