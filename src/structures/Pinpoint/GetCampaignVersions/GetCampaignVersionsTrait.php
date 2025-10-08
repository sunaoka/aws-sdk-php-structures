<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions;

trait GetCampaignVersionsTrait
{
    /**
     * @param GetCampaignVersionsRequest $args
     * @return GetCampaignVersionsResponse
     */
    public function getCampaignVersions(GetCampaignVersionsRequest $args)
    {
        $result = parent::getCampaignVersions($args->toArray());
        return new GetCampaignVersionsResponse($result->toArray());
    }
}
