<?php

namespace Sunaoka\Aws\Structures\Detective\RejectInvitation;

trait RejectInvitationTrait
{
    /**
     * @param RejectInvitationRequest $args
     * @return void
     */
    public function rejectInvitation(RejectInvitationRequest $args)
    {
        parent::rejectInvitation($args->toArray());
    }
}
