<?php

namespace Sunaoka\Aws\Structures\Deadline\DisassociateMemberFromFarm;

trait DisassociateMemberFromFarmTrait
{
    /**
     * @param DisassociateMemberFromFarmRequest $args
     * @return DisassociateMemberFromFarmResponse
     */
    public function disassociateMemberFromFarm(DisassociateMemberFromFarmRequest $args)
    {
        $result = parent::disassociateMemberFromFarm($args->toArray());
        return new DisassociateMemberFromFarmResponse($result->toArray());
    }
}
