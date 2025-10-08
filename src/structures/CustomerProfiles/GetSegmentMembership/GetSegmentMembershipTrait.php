<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentMembership;

trait GetSegmentMembershipTrait
{
    /**
     * @param GetSegmentMembershipRequest $args
     * @return GetSegmentMembershipResponse
     */
    public function getSegmentMembership(GetSegmentMembershipRequest $args)
    {
        $result = parent::getSegmentMembership($args->toArray());
        return new GetSegmentMembershipResponse($result->toArray());
    }
}
