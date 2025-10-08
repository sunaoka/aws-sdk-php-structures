<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion;

trait GetCampaignVersionTrait
{
    /**
     * @param GetCampaignVersionRequest $args
     * @return GetCampaignVersionResponse
     */
    public function getCampaignVersion(GetCampaignVersionRequest $args)
    {
        $result = parent::getCampaignVersion($args->toArray());
        return new GetCampaignVersionResponse($result->toArray());
    }
}
