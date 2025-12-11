<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\ListConnectionInvitations;

trait ListConnectionInvitationsTrait
{
    /**
     * @param ListConnectionInvitationsRequest $args
     * @return ListConnectionInvitationsResponse
     */
    public function listConnectionInvitations(ListConnectionInvitationsRequest $args)
    {
        $result = parent::listConnectionInvitations($args->toArray());
        return new ListConnectionInvitationsResponse($result->toArray());
    }
}
