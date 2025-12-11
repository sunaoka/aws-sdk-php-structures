<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CreateConnectionInvitation;

trait CreateConnectionInvitationTrait
{
    /**
     * @param CreateConnectionInvitationRequest $args
     * @return CreateConnectionInvitationResponse
     */
    public function createConnectionInvitation(CreateConnectionInvitationRequest $args)
    {
        $result = parent::createConnectionInvitation($args->toArray());
        return new CreateConnectionInvitationResponse($result->toArray());
    }
}
