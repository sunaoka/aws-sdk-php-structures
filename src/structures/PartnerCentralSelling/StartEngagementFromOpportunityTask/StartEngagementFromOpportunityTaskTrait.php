<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementFromOpportunityTask;

trait StartEngagementFromOpportunityTaskTrait
{
    /**
     * @param StartEngagementFromOpportunityTaskRequest $args
     * @return StartEngagementFromOpportunityTaskResponse
     */
    public function startEngagementFromOpportunityTask(StartEngagementFromOpportunityTaskRequest $args)
    {
        $result = parent::startEngagementFromOpportunityTask($args->toArray());
        return new StartEngagementFromOpportunityTaskResponse($result->toArray());
    }
}
