<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones;

trait ListMilestonesTrait
{
    /**
     * @param ListMilestonesRequest $args
     * @return ListMilestonesResponse
     */
    public function listMilestones(ListMilestonesRequest $args)
    {
        $result = parent::listMilestones($args->toArray());
        return new ListMilestonesResponse($result->toArray());
    }
}
