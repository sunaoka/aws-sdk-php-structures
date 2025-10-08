<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToFleet;

trait AssociateMemberToFleetTrait
{
    /**
     * @param AssociateMemberToFleetRequest $args
     * @return AssociateMemberToFleetResponse
     */
    public function associateMemberToFleet(AssociateMemberToFleetRequest $args)
    {
        $result = parent::associateMemberToFleet($args->toArray());
        return new AssociateMemberToFleetResponse($result->toArray());
    }
}
