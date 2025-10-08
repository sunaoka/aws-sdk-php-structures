<?php

namespace Sunaoka\Aws\Structures\Detective\AcceptInvitation;

trait AcceptInvitationTrait
{
    /**
     * @param AcceptInvitationRequest $args
     * @return void
     */
    public function acceptInvitation(AcceptInvitationRequest $args)
    {
        parent::acceptInvitation($args->toArray());
    }
}
