<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementByAcceptingInvitationTasks;

trait ListEngagementByAcceptingInvitationTasksTrait
{
    /**
     * @param ListEngagementByAcceptingInvitationTasksRequest $args
     * @return ListEngagementByAcceptingInvitationTasksResponse
     */
    public function listEngagementByAcceptingInvitationTasks(ListEngagementByAcceptingInvitationTasksRequest $args)
    {
        $result = parent::listEngagementByAcceptingInvitationTasks($args->toArray());
        return new ListEngagementByAcceptingInvitationTasksResponse($result->toArray());
    }
}
