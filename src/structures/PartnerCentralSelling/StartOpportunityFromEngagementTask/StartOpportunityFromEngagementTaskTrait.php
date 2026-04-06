<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartOpportunityFromEngagementTask;

trait StartOpportunityFromEngagementTaskTrait
{
    /**
     * @param StartOpportunityFromEngagementTaskRequest $args
     * @return StartOpportunityFromEngagementTaskResponse
     */
    public function startOpportunityFromEngagementTask(StartOpportunityFromEngagementTaskRequest $args)
    {
        $result = parent::startOpportunityFromEngagementTask($args->toArray());
        return new StartOpportunityFromEngagementTaskResponse($result->toArray());
    }
}
