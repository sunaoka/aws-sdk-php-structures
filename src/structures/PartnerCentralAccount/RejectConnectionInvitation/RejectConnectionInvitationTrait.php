<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\RejectConnectionInvitation;

trait RejectConnectionInvitationTrait
{
    /**
     * @param RejectConnectionInvitationRequest $args
     * @return RejectConnectionInvitationResponse
     */
    public function rejectConnectionInvitation(RejectConnectionInvitationRequest $args)
    {
        $result = parent::rejectConnectionInvitation($args->toArray());
        return new RejectConnectionInvitationResponse($result->toArray());
    }
}
