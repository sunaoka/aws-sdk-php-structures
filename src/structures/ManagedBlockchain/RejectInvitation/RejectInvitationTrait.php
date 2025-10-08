<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\RejectInvitation;

trait RejectInvitationTrait
{
    /**
     * @param RejectInvitationRequest $args
     * @return RejectInvitationResponse
     */
    public function rejectInvitation(RejectInvitationRequest $args)
    {
        $result = parent::rejectInvitation($args->toArray());
        return new RejectInvitationResponse($result->toArray());
    }
}
