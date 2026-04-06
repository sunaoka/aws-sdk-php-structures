<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\AcceptConnectionInvitation;

trait AcceptConnectionInvitationTrait
{
    /**
     * @param AcceptConnectionInvitationRequest $args
     * @return AcceptConnectionInvitationResponse
     */
    public function acceptConnectionInvitation(AcceptConnectionInvitationRequest $args)
    {
        $result = parent::acceptConnectionInvitation($args->toArray());
        return new AcceptConnectionInvitationResponse($result->toArray());
    }
}
