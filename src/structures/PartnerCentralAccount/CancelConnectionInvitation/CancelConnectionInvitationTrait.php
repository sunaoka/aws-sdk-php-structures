<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\CancelConnectionInvitation;

trait CancelConnectionInvitationTrait
{
    /**
     * @param CancelConnectionInvitationRequest $args
     * @return CancelConnectionInvitationResponse
     */
    public function cancelConnectionInvitation(CancelConnectionInvitationRequest $args)
    {
        $result = parent::cancelConnectionInvitation($args->toArray());
        return new CancelConnectionInvitationResponse($result->toArray());
    }
}
