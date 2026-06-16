<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetProspectingFromEngagementTask;

trait GetProspectingFromEngagementTaskTrait
{
    /**
     * @param GetProspectingFromEngagementTaskRequest $args
     * @return GetProspectingFromEngagementTaskResponse
     */
    public function getProspectingFromEngagementTask(GetProspectingFromEngagementTaskRequest $args)
    {
        $result = parent::getProspectingFromEngagementTask($args->toArray());
        return new GetProspectingFromEngagementTaskResponse($result->toArray());
    }
}
