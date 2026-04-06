<?php

namespace Sunaoka\Aws\Structures\Chime\CreateChannelMembership;

trait CreateChannelMembershipTrait
{
    /**
     * @param CreateChannelMembershipRequest $args
     * @return CreateChannelMembershipResponse
     */
    public function createChannelMembership(CreateChannelMembershipRequest $args)
    {
        $result = parent::createChannelMembership($args->toArray());
        return new CreateChannelMembershipResponse($result->toArray());
    }
}
