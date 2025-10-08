<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CancelMembership;

trait CancelMembershipTrait
{
    /**
     * @param CancelMembershipRequest $args
     * @return CancelMembershipResponse
     */
    public function cancelMembership(CancelMembershipRequest $args)
    {
        $result = parent::cancelMembership($args->toArray());
        return new CancelMembershipResponse($result->toArray());
    }
}
