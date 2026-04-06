<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateChannelMembership;

trait BatchCreateChannelMembershipTrait
{
    /**
     * @param BatchCreateChannelMembershipRequest $args
     * @return BatchCreateChannelMembershipResponse
     */
    public function batchCreateChannelMembership(BatchCreateChannelMembershipRequest $args)
    {
        $result = parent::batchCreateChannelMembership($args->toArray());
        return new BatchCreateChannelMembershipResponse($result->toArray());
    }
}
