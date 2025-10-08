<?php

namespace Sunaoka\Aws\Structures\AIOps\GetInvestigationGroup;

trait GetInvestigationGroupTrait
{
    /**
     * @param GetInvestigationGroupRequest $args
     * @return GetInvestigationGroupResponse
     */
    public function getInvestigationGroup(GetInvestigationGroupRequest $args)
    {
        $result = parent::getInvestigationGroup($args->toArray());
        return new GetInvestigationGroupResponse($result->toArray());
    }
}
