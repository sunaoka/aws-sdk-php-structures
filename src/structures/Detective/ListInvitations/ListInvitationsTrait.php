<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvitations;

trait ListInvitationsTrait
{
    /**
     * @param ListInvitationsRequest $args
     * @return ListInvitationsResponse
     */
    public function listInvitations(ListInvitationsRequest $args)
    {
        $result = parent::listInvitations($args->toArray());
        return new ListInvitationsResponse($result->toArray());
    }
}
