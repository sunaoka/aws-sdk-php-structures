<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromFleet;

trait DisassociateMemberFromFleetTrait
{
    /**
     * @param DisassociateMemberFromFleetRequest $args
     * @return DisassociateMemberFromFleetResponse
     */
    public function disassociateMemberFromFleet(DisassociateMemberFromFleetRequest $args)
    {
        $result = parent::disassociateMemberFromFleet($args->toArray());
        return new DisassociateMemberFromFleetResponse($result->toArray());
    }
}
