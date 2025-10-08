<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementFromOpportunityTasks;

trait ListEngagementFromOpportunityTasksTrait
{
    /**
     * @param ListEngagementFromOpportunityTasksRequest $args
     * @return ListEngagementFromOpportunityTasksResponse
     */
    public function listEngagementFromOpportunityTasks(ListEngagementFromOpportunityTasksRequest $args)
    {
        $result = parent::listEngagementFromOpportunityTasks($args->toArray());
        return new ListEngagementFromOpportunityTasksResponse($result->toArray());
    }
}
