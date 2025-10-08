<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteInvitations;

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
