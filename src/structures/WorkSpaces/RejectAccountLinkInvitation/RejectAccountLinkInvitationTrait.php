<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RejectAccountLinkInvitation;

trait RejectAccountLinkInvitationTrait
{
    /**
     * @param RejectAccountLinkInvitationRequest $args
     * @return RejectAccountLinkInvitationResponse
     */
    public function rejectAccountLinkInvitation(RejectAccountLinkInvitationRequest $args)
    {
        $result = parent::rejectAccountLinkInvitation($args->toArray());
        return new RejectAccountLinkInvitationResponse($result->toArray());
    }
}
