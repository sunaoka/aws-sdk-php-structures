<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\DeleteChannelMembership;

trait DeleteChannelMembershipTrait
{
    /**
     * @param DeleteChannelMembershipRequest $args
     * @return void
     */
    public function deleteChannelMembership(DeleteChannelMembershipRequest $args)
    {
        parent::deleteChannelMembership($args->toArray());
    }
}
