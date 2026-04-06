<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetMembership;

trait GetMembershipTrait
{
    /**
     * @param GetMembershipRequest $args
     * @return GetMembershipResponse
     */
    public function getMembership(GetMembershipRequest $args)
    {
        $result = parent::getMembership($args->toArray());
        return new GetMembershipResponse($result->toArray());
    }
}
