<?php

namespace Sunaoka\Aws\Structures\RAM\AcceptResourceShareInvitation;

trait AcceptResourceShareInvitationTrait
{
    /**
     * @param AcceptResourceShareInvitationRequest $args
     * @return AcceptResourceShareInvitationResponse
     */
    public function acceptResourceShareInvitation(AcceptResourceShareInvitationRequest $args)
    {
        $result = parent::acceptResourceShareInvitation($args->toArray());
        return new AcceptResourceShareInvitationResponse($result->toArray());
    }
}
