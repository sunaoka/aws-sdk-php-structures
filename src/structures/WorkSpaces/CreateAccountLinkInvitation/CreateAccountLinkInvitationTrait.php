<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateAccountLinkInvitation;

trait CreateAccountLinkInvitationTrait
{
    /**
     * @param CreateAccountLinkInvitationRequest $args
     * @return CreateAccountLinkInvitationResponse
     */
    public function createAccountLinkInvitation(CreateAccountLinkInvitationRequest $args)
    {
        $result = parent::createAccountLinkInvitation($args->toArray());
        return new CreateAccountLinkInvitationResponse($result->toArray());
    }
}
