<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaigns;

trait GetCampaignsTrait
{
    /**
     * @param GetCampaignsRequest $args
     * @return GetCampaignsResponse
     */
    public function getCampaigns(GetCampaignsRequest $args)
    {
        $result = parent::getCampaigns($args->toArray());
        return new GetCampaignsResponse($result->toArray());
    }
}
