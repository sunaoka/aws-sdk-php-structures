<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateMilestone;

trait CreateMilestoneTrait
{
    /**
     * @param CreateMilestoneRequest $args
     * @return CreateMilestoneResponse
     */
    public function createMilestone(CreateMilestoneRequest $args)
    {
        $result = parent::createMilestone($args->toArray());
        return new CreateMilestoneResponse($result->toArray());
    }
}
