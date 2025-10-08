<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign;

trait CreateCampaignTrait
{
    /**
     * @param CreateCampaignRequest $args
     * @return CreateCampaignResponse
     */
    public function createCampaign(CreateCampaignRequest $args)
    {
        $result = parent::createCampaign($args->toArray());
        return new CreateCampaignResponse($result->toArray());
    }
}
