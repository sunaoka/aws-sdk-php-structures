<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign;

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
