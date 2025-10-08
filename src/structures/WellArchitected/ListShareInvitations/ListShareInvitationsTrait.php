<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListShareInvitations;

trait ListShareInvitationsTrait
{
    /**
     * @param ListShareInvitationsRequest $args
     * @return ListShareInvitationsResponse
     */
    public function listShareInvitations(ListShareInvitationsRequest $args)
    {
        $result = parent::listShareInvitations($args->toArray());
        return new ListShareInvitationsResponse($result->toArray());
    }
}
