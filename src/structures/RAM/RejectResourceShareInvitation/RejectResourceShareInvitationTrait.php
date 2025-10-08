<?php

namespace Sunaoka\Aws\Structures\RAM\RejectResourceShareInvitation;

trait RejectResourceShareInvitationTrait
{
    /**
     * @param RejectResourceShareInvitationRequest $args
     * @return RejectResourceShareInvitationResponse
     */
    public function rejectResourceShareInvitation(RejectResourceShareInvitationRequest $args)
    {
        $result = parent::rejectResourceShareInvitation($args->toArray());
        return new RejectResourceShareInvitationResponse($result->toArray());
    }
}
