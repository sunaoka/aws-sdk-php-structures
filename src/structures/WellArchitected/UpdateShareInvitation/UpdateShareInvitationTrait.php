<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateShareInvitation;

trait UpdateShareInvitationTrait
{
    /**
     * @param UpdateShareInvitationRequest $args
     * @return UpdateShareInvitationResponse
     */
    public function updateShareInvitation(UpdateShareInvitationRequest $args)
    {
        $result = parent::updateShareInvitation($args->toArray());
        return new UpdateShareInvitationResponse($result->toArray());
    }
}
