<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartEngagementByAcceptingInvitationTask;

trait StartEngagementByAcceptingInvitationTaskTrait
{
    /**
     * @param StartEngagementByAcceptingInvitationTaskRequest $args
     * @return StartEngagementByAcceptingInvitationTaskResponse
     */
    public function startEngagementByAcceptingInvitationTask(StartEngagementByAcceptingInvitationTaskRequest $args)
    {
        $result = parent::startEngagementByAcceptingInvitationTask($args->toArray());
        return new StartEngagementByAcceptingInvitationTaskResponse($result->toArray());
    }
}
