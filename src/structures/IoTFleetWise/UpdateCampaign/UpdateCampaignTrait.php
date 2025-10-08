<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateCampaign;

trait UpdateCampaignTrait
{
    /**
     * @param UpdateCampaignRequest $args
     * @return UpdateCampaignResponse
     */
    public function updateCampaign(UpdateCampaignRequest $args)
    {
        $result = parent::updateCampaign($args->toArray());
        return new UpdateCampaignResponse($result->toArray());
    }
}
