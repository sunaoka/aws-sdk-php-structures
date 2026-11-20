<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaign;

trait GetCampaignTrait
{
    /**
     * @param GetCampaignRequest $args
     * @return GetCampaignResponse
     */
    public function getCampaign(GetCampaignRequest $args)
    {
        $result = parent::getCampaign($args->toArray());
        return new GetCampaignResponse($result->toArray());
    }
}
