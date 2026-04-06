<?php

namespace Sunaoka\Aws\Structures\AIOps\UpdateInvestigationGroup;

trait UpdateInvestigationGroupTrait
{
    /**
     * @param UpdateInvestigationGroupRequest $args
     * @return UpdateInvestigationGroupResponse
     */
    public function updateInvestigationGroup(UpdateInvestigationGroupRequest $args)
    {
        $result = parent::updateInvestigationGroup($args->toArray());
        return new UpdateInvestigationGroupResponse($result->toArray());
    }
}
