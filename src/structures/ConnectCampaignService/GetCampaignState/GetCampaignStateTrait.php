<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\GetCampaignState;

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
