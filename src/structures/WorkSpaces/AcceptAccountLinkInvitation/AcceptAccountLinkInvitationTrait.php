<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AcceptAccountLinkInvitation;

trait AcceptAccountLinkInvitationTrait
{
    /**
     * @param AcceptAccountLinkInvitationRequest $args
     * @return AcceptAccountLinkInvitationResponse
     */
    public function acceptAccountLinkInvitation(AcceptAccountLinkInvitationRequest $args)
    {
        $result = parent::acceptAccountLinkInvitation($args->toArray());
        return new AcceptAccountLinkInvitationResponse($result->toArray());
    }
}
