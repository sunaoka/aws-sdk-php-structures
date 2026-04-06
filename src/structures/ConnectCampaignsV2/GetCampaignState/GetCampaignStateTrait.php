<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignState;

trait GetCampaignStateTrait
{
    /**
     * @param GetCampaignStateRequest $args
     * @return GetCampaignStateResponse
     */
    public function getCampaignState(GetCampaignStateRequest $args)
    {
        $result = parent::getCampaignState($args->toArray());
        return new GetCampaignStateResponse($result->toArray());
    }
}
