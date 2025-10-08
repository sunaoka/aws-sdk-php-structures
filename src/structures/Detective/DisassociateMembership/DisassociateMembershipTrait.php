<?php

namespace Sunaoka\Aws\Structures\Detective\DisassociateMembership;

trait DisassociateMembershipTrait
{
    /**
     * @param DisassociateMembershipRequest $args
     * @return void
     */
    public function disassociateMembership(DisassociateMembershipRequest $args)
    {
        parent::disassociateMembership($args->toArray());
    }
}
