<?php

namespace Sunaoka\Aws\Structures\SecurityHub\AcceptInvitation;

trait AcceptInvitationTrait
{
    /**
     * @param AcceptInvitationRequest $args
     * @return AcceptInvitationResponse
     */
    public function acceptInvitation(AcceptInvitationRequest $args)
    {
        $result = parent::acceptInvitation($args->toArray());
        return new AcceptInvitationResponse($result->toArray());
    }
}
