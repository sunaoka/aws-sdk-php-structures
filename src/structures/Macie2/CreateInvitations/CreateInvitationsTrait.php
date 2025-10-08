<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateInvitations;

trait CreateInvitationsTrait
{
    /**
     * @param CreateInvitationsRequest $args
     * @return CreateInvitationsResponse
     */
    public function createInvitations(CreateInvitationsRequest $args)
    {
        $result = parent::createInvitations($args->toArray());
        return new CreateInvitationsResponse($result->toArray());
    }
}
