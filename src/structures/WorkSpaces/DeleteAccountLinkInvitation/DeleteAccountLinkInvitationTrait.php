<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteAccountLinkInvitation;

trait DeleteAccountLinkInvitationTrait
{
    /**
     * @param DeleteAccountLinkInvitationRequest $args
     * @return DeleteAccountLinkInvitationResponse
     */
    public function deleteAccountLinkInvitation(DeleteAccountLinkInvitationRequest $args)
    {
        $result = parent::deleteAccountLinkInvitation($args->toArray());
        return new DeleteAccountLinkInvitationResponse($result->toArray());
    }
}
