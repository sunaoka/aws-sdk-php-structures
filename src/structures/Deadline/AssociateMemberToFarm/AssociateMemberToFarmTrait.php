<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToFarm;

trait AssociateMemberToFarmTrait
{
    /**
     * @param AssociateMemberToFarmRequest $args
     * @return AssociateMemberToFarmResponse
     */
    public function associateMemberToFarm(AssociateMemberToFarmRequest $args)
    {
        $result = parent::associateMemberToFarm($args->toArray());
        return new AssociateMemberToFarmResponse($result->toArray());
    }
}
