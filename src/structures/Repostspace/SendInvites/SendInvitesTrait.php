<?php

namespace Sunaoka\Aws\Structures\Repostspace\SendInvites;

trait SendInvitesTrait
{
    /**
     * @param SendInvitesRequest $args
     * @return void
     */
    public function sendInvites(SendInvitesRequest $args)
    {
        parent::sendInvites($args->toArray());
    }
}
