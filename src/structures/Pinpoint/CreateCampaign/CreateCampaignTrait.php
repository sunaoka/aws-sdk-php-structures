<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign;

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
