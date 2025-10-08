<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignActivities;

trait GetCampaignActivitiesTrait
{
    /**
     * @param GetCampaignActivitiesRequest $args
     * @return GetCampaignActivitiesResponse
     */
    public function getCampaignActivities(GetCampaignActivitiesRequest $args)
    {
        $result = parent::getCampaignActivities($args->toArray());
        return new GetCampaignActivitiesResponse($result->toArray());
    }
}
