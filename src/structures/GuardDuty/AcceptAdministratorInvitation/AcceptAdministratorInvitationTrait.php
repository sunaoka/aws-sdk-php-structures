<?php

namespace Sunaoka\Aws\Structures\GuardDuty\AcceptAdministratorInvitation;

trait AcceptAdministratorInvitationTrait
{
    /**
     * @param AcceptAdministratorInvitationRequest $args
     * @return AcceptAdministratorInvitationResponse
     */
    public function acceptAdministratorInvitation(AcceptAdministratorInvitationRequest $args)
    {
        $result = parent::acceptAdministratorInvitation($args->toArray());
        return new AcceptAdministratorInvitationResponse($result->toArray());
    }
}
