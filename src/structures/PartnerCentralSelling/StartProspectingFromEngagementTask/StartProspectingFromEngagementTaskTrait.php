<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartProspectingFromEngagementTask;

trait StartProspectingFromEngagementTaskTrait
{
    /**
     * @param StartProspectingFromEngagementTaskRequest $args
     * @return StartProspectingFromEngagementTaskResponse
     */
    public function startProspectingFromEngagementTask(StartProspectingFromEngagementTaskRequest $args)
    {
        $result = parent::startProspectingFromEngagementTask($args->toArray());
        return new StartProspectingFromEngagementTaskResponse($result->toArray());
    }
}
