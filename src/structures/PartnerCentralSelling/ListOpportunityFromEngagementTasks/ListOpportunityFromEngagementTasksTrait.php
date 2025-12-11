<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityFromEngagementTasks;

trait ListOpportunityFromEngagementTasksTrait
{
    /**
     * @param ListOpportunityFromEngagementTasksRequest $args
     * @return ListOpportunityFromEngagementTasksResponse
     */
    public function listOpportunityFromEngagementTasks(ListOpportunityFromEngagementTasksRequest $args)
    {
        $result = parent::listOpportunityFromEngagementTasks($args->toArray());
        return new ListOpportunityFromEngagementTasksResponse($result->toArray());
    }
}
