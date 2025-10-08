<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListCampaigns;

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
