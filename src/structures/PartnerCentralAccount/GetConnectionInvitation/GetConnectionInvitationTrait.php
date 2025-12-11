<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetConnectionInvitation;

trait GetConnectionInvitationTrait
{
    /**
     * @param GetConnectionInvitationRequest $args
     * @return GetConnectionInvitationResponse
     */
    public function getConnectionInvitation(GetConnectionInvitationRequest $args)
    {
        $result = parent::getConnectionInvitation($args->toArray());
        return new GetConnectionInvitationResponse($result->toArray());
    }
}
