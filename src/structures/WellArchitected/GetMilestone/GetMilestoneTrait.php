<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetMilestone;

trait GetMilestoneTrait
{
    /**
     * @param GetMilestoneRequest $args
     * @return GetMilestoneResponse
     */
    public function getMilestone(GetMilestoneRequest $args)
    {
        $result = parent::getMilestone($args->toArray());
        return new GetMilestoneResponse($result->toArray());
    }
}
