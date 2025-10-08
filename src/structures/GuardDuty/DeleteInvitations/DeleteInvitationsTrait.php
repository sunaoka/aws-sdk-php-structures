<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteInvitations;

trait DeleteInvitationsTrait
{
    /**
     * @param DeleteInvitationsRequest $args
     * @return DeleteInvitationsResponse
     */
    public function deleteInvitations(DeleteInvitationsRequest $args)
    {
        $result = parent::deleteInvitations($args->toArray());
        return new DeleteInvitationsResponse($result->toArray());
    }
}
