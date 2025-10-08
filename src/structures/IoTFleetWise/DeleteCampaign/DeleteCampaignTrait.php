<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\DeleteCampaign;

trait DeleteCampaignTrait
{
    /**
     * @param DeleteCampaignRequest $args
     * @return DeleteCampaignResponse
     */
    public function deleteCampaign(DeleteCampaignRequest $args)
    {
        $result = parent::deleteCampaign($args->toArray());
        return new DeleteCampaignResponse($result->toArray());
    }
}
