<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMemberships;

trait ListChannelMembershipsTrait
{
    /**
     * @param ListChannelMembershipsRequest $args
     * @return ListChannelMembershipsResponse
     */
    public function listChannelMemberships(ListChannelMembershipsRequest $args)
    {
        $result = parent::listChannelMemberships($args->toArray());
        return new ListChannelMembershipsResponse($result->toArray());
    }
}
