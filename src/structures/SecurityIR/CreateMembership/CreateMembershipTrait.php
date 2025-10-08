<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateMembership;

trait CreateMembershipTrait
{
    /**
     * @param CreateMembershipRequest $args
     * @return CreateMembershipResponse
     */
    public function createMembership(CreateMembershipRequest $args)
    {
        $result = parent::createMembership($args->toArray());
        return new CreateMembershipResponse($result->toArray());
    }
}
