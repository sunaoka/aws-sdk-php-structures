<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListProspectingFromEngagementTasks;

trait ListProspectingFromEngagementTasksTrait
{
    /**
     * @param ListProspectingFromEngagementTasksRequest $args
     * @return ListProspectingFromEngagementTasksResponse
     */
    public function listProspectingFromEngagementTasks(ListProspectingFromEngagementTasksRequest $args)
    {
        $result = parent::listProspectingFromEngagementTasks($args->toArray());
        return new ListProspectingFromEngagementTasksResponse($result->toArray());
    }
}
